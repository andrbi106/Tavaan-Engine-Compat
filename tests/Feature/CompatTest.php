<?php

declare(strict_types=1);

namespace Tavaan\Engine\Compat\Tests\Feature;

use PHPUnit\Framework\TestCase;
use Tavaan\Engine\Compat\Compat;
use Tavaan\Engine\Compat\CompatServiceProvider;
use Tavaan\Core\Contracts\Config\RepositoryInterface;

/**
 * تست‌های Feature برای موتور Compat.
 *
 * هر سناریوی T-NN از مستندات باید به یک متد testTNN_* تبدیل شود.
 */
final class CompatTest extends TestCase
{
    private Compat $engine;

    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->createMock(RepositoryInterface::class);
        $config->method('get')->willReturn(null);
        $this->engine = new Compat($config);
    }

    /**
     * T-01: با `force_fallbacks=true` همهٔ توابع نتیجهٔ یکسان با ext می‌دهند
     */
    public function test_t01__force_fallbackstrue__(): void
    {
        // TODO: پیاده‌سازی سناریوی T-01 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-01 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-02: `Decimal` در برابر `bcmath` روی ۱۰۰۰۰ حالت تصادفی (Property-Based)
     */
    public function test_t02_decimal___bcmath__(): void
    {
        // TODO: پیاده‌سازی سناریوی T-02 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-02 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-03: `Utf8::length/substr/split` روی متن فارسی/اموجی/چینشی
     */
    public function test_t03_utf8lengthsubstrsplit__(): void
    {
        // TODO: پیاده‌سازی سناریوی T-03 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-03 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-04: `ZipWriterPure` → فایل تولیدی با `unzip -t` معتبر است
     */
    public function test_t04_zip_writer_pure____(): void
    {
        // TODO: پیاده‌سازی سناریوی T-04 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-04 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-05: `MagicBytesDetector` روی ۱۲۰ فایل نمونه
     */
    public function test_t05_magic_bytes_detector___(): void
    {
        // TODO: پیاده‌سازی سناریوی T-05 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-05 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-06: `StreamHttpTransport` در برابر `CurlHttpTransport` (Mock Server)
     */
    public function test_t06_stream_http_transport___c(): void
    {
        // TODO: پیاده‌سازی سناریوی T-06 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-06 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-07: `Compat::report()` همهٔ افزونه‌های فهرست‌شده را پوشش می‌دهد
     */
    public function test_t07_compatreport___(): void
    {
        // TODO: پیاده‌سازی سناریوی T-07 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-07 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-08: نبود `intl` → `Jalali` نتیجهٔ یکسان می‌دهد
     */
    public function test_t08__intl__jalali__(): void
    {
        // TODO: پیاده‌سازی سناریوی T-08 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-08 هنوز پیاده‌سازی نشده است.');
    }

}