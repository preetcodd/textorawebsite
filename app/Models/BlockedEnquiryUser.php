<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlockedEnquiryUser extends Model
{
    use HasFactory;

    protected $fillable = [
        'email',
        'contact',
        'ip_address',
        'reason',
        'blocked_by',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    public static function normalizeEmail(?string $email): ?string
    {
        $clean = strtolower(trim((string) $email));
        return $clean !== '' ? $clean : null;
    }

    public static function normalizeContact(?string $contact): ?string
    {
        $digits = preg_replace('/\D+/', '', (string) $contact);
        if ($digits === '' || $digits === null) {
            return null;
        }
        // Keep last 10 digits when longer (e.g. +91XXXXXXXXXX or 0XXXXXXXXXX) so country-code variations match reliably
        return strlen($digits) > 10 ? substr($digits, -10) : $digits;
    }

    public static function normalizeIp(?string $ip): ?string
    {
        $clean = trim((string) $ip);
        return $clean !== '' ? $clean : null;
    }

    /**
     * Check whether an email, phone contact, or IP matches an active block entry.
     */
    public static function isBlocked(?string $email = null, ?string $contact = null, ?string $ip = null): bool
    {
        $normEmail = self::normalizeEmail($email);
        $normContact = self::normalizeContact($contact);
        $normIp = self::normalizeIp($ip);

        if ($normEmail === null && $normContact === null && $normIp === null) {
            return false;
        }

        return self::query()
            ->where('is_active', true)
            ->where(function ($query) use ($normEmail, $normContact, $normIp) {
                if ($normEmail !== null) {
                    $query->orWhere('email', $normEmail);
                }
                if ($normContact !== null) {
                    $query->orWhere('contact', $normContact);
                }
                if ($normIp !== null) {
                    $query->orWhere('ip_address', $normIp);
                }
            })
            ->exists();
    }

    /**
     * Block an email, phone contact, and/or IP if not already actively blocked.
     */
    public static function blockIdentifier(?string $email = null, ?string $contact = null, ?string $ip = null, ?string $reason = null, ?int $blockedBy = null): ?self
    {
        $normEmail = self::normalizeEmail($email);
        $normContact = self::normalizeContact($contact);
        $normIp = self::normalizeIp($ip);

        if ($normEmail === null && $normContact === null && $normIp === null) {
            return null;
        }

        $existing = self::query()
            ->where('email', $normEmail)
            ->where('contact', $normContact)
            ->where('ip_address', $normIp)
            ->first();

        if ($existing) {
            $existing->update([
                'is_active' => true,
                'reason' => $reason ?: $existing->reason,
                'blocked_by' => $blockedBy ?? $existing->blocked_by,
            ]);
            return $existing;
        }

        return self::create([
            'email' => $normEmail,
            'contact' => $normContact,
            'ip_address' => $normIp,
            'reason' => $reason,
            'blocked_by' => $blockedBy,
            'is_active' => true,
        ]);
    }

    /**
     * Unblock (deactivate) any active block rules matching the given email, contact, or IP.
     */
    public static function unblockIdentifiers(?string $email = null, ?string $contact = null, ?string $ip = null): int
    {
        $normEmail = self::normalizeEmail($email);
        $normContact = self::normalizeContact($contact);
        $normIp = self::normalizeIp($ip);

        if ($normEmail === null && $normContact === null && $normIp === null) {
            return 0;
        }

        return self::query()
            ->where('is_active', true)
            ->where(function ($query) use ($normEmail, $normContact, $normIp) {
                if ($normEmail !== null) {
                    $query->orWhere('email', $normEmail);
                }
                if ($normContact !== null) {
                    $query->orWhere('contact', $normContact);
                }
                if ($normIp !== null) {
                    $query->orWhere('ip_address', $normIp);
                }
            })
            ->update(['is_active' => false]);
    }
}
