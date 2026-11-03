# Tavaan Engine — Compat

> **سازگاری و Polyfill** — موتور Compat در فریمورک تَوان

## مشخصات

| فیلد | مقدار |
|---|---|
| شناسه | `tavaan.engine.compat` |
| نام | `Compat` |
| عنوان فارسی | سازگاری و Polyfill |
| نسخه | `0.1.0` |
| namespace | `Tavaan\Engine\Compat` |
| نوع | `engine` |

## قراردادها (Contracts)

این موتور قراردادهای زیر را ارائه می‌دهد:

- `Tavaan\Engine\Compat\Contracts\CompatInterface`
- `Tavaan\Engine\Compat\Contracts\MagicBytesDetectorInterface`
- `Tavaan\Engine\Compat\Contracts\Utf8Interface`
- `Tavaan\Engine\Compat\Contracts\ZipWriterPureInterface`

## کلاس‌های اصلی

- `src/Compat.php`
- `src/CompatServiceProvider.php`
- `src/Console/DoctorCommand.php`
- `src/Decimal.php`
- `src/EngineCapabilityException.php`
- `src/MagicBytesDetector.php`
- `src/RoundingMode.php`
- `src/Utf8.php`
- `src/ZipWriterPure.php`

## Service Providerها

- `Tavaan\Engine\Compat\CompatServiceProvider`

## دستورات CLI

- `doctor`

## پیکربندی

- فایل پیکربندی: `config/compat.php`
- کلید: `compat`

## نصب

```bash
git clone https://github.com/andrbi106/Tavaan-Engine-Compat.git
```

این موتور بخشی از فریمورک تَوان است و معمولاً به‌صورت مستقیم نصب نمی‌شود،
بلکه توسط [Tavaan-Core](https://github.com/andrbi106/Tavaan-Core) مدیریت می‌شود.

## روابط با سایر مخازن

| مخزن | نقش |
|---|---|
| **`andrbi106/Tavaan-Engine-Compat`** (این مخزن) | موتور Compat |
| `andrbi106/Tavaan-Engine-Core` | ساختار پایه + درگاه ارتباط موتورها |
| `andrbi106/Tavaan-Core` | اسکلت اپلیکیشن + همهٔ موتورها |
| `Derogaramin/Tavaan-Framework` | فریمورک مادر (monorepo) |

## مجوز

MIT — هم‌راستا با فریمورک مادر تَوان.
