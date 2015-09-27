<?php namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Script\ScriptLatn;

/**
 * Class LocaleJv - Javanese
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license       GPLv3+
 */
class LocaleJvLatn extends LocaleJv {
	/** {@inheritdoc} */
	public function endonym() {
		return 'Basa Jawa';
	}

	/** {@inheritdoc} */
	public function script() {
		return new ScriptLatn;
	}
}