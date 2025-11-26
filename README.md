# audio-pulse

A PHP library for multimodal signal processing and audio analysis.

### Installation

Install via composer:
```bash
composer require your-vendor/audio-pulse
```

### Usage

```php
use Audiopulse\Audiopulse;

$processor = new Audiopulse();
$data = $processor->process('path/to/audio.wav');

print_r($data);
```

### Testing

Run the test suite:
```bash
./vendor/bin/phpunit tests
```

### License

MIT License.




