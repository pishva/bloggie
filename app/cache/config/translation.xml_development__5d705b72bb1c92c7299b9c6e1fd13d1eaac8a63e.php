<?php

// This is a compiled Agavi configuration file
// Compiled from: C:/workspace/bloggie/app/config/translation.xml
// Generated by: AgaviTranslationConfigHandler
// Date: 2013-01-30T06:02:41+0000

$this->defaultDomain = 'default';
$this->defaultLocaleIdentifier = 'en_US';
$this->defaultTimeZone = NULL;
$this->availableConfigLocales['de_DE'] = array('identifier' => 'de_DE', 'identifierData' => array (
  'language' => 'de',
  'script' => NULL,
  'territory' => 'DE',
  'variant' => NULL,
  'options' => 
  array (
  ),
  'locale_str' => 'de_DE',
  'option_str' => NULL,
), 'parameters' => array (
  'description' => 'Deutsch',
));
$this->availableConfigLocales['en_US'] = array('identifier' => 'en_US', 'identifierData' => array (
  'language' => 'en',
  'script' => NULL,
  'territory' => 'US',
  'variant' => NULL,
  'options' => 
  array (
  ),
  'locale_str' => 'en_US',
  'option_str' => NULL,
), 'parameters' => array (
  'description' => 'English',
));
$this->availableConfigLocales['fa_IR'] = array('identifier' => 'fa_IR', 'identifierData' => array (
  'language' => 'fa',
  'script' => NULL,
  'territory' => 'IR',
  'variant' => NULL,
  'options' => 
  array (
  ),
  'locale_str' => 'fa_IR',
  'option_str' => NULL,
), 'parameters' => array (
  'description' => 'فارسی',
));
$this->availableConfigLocales['fi_FI'] = array('identifier' => 'fi_FI', 'identifierData' => array (
  'language' => 'fi',
  'script' => NULL,
  'territory' => 'FI',
  'variant' => NULL,
  'options' => 
  array (
  ),
  'locale_str' => 'fi_FI',
  'option_str' => NULL,
), 'parameters' => array (
  'description' => 'Suomi',
));
$this->availableConfigLocales['nl_BE'] = array('identifier' => 'nl_BE', 'identifierData' => array (
  'language' => 'nl',
  'script' => NULL,
  'territory' => 'BE',
  'variant' => NULL,
  'options' => 
  array (
  ),
  'locale_str' => 'nl_BE',
  'option_str' => NULL,
), 'parameters' => array (
  'description' => 'Nederlands (België)',
));
$this->availableConfigLocales['nl_NL'] = array('identifier' => 'nl_NL', 'identifierData' => array (
  'language' => 'nl',
  'script' => NULL,
  'territory' => 'NL',
  'variant' => NULL,
  'options' => 
  array (
  ),
  'locale_str' => 'nl_NL',
  'option_str' => NULL,
), 'parameters' => array (
  'description' => 'Nederlands',
));
$this->availableConfigLocales['pl_PL'] = array('identifier' => 'pl_PL', 'identifierData' => array (
  'language' => 'pl',
  'script' => NULL,
  'territory' => 'PL',
  'variant' => NULL,
  'options' => 
  array (
  ),
  'locale_str' => 'pl_PL',
  'option_str' => NULL,
), 'parameters' => array (
  'description' => 'Polski',
));
$this->availableConfigLocales['zh_CN'] = array('identifier' => 'zh_CN', 'identifierData' => array (
  'language' => 'zh',
  'script' => NULL,
  'territory' => 'CN',
  'variant' => NULL,
  'options' => 
  array (
  ),
  'locale_str' => 'zh_CN',
  'option_str' => NULL,
), 'parameters' => array (
  'description' => '简体中文',
));
$this->availableConfigLocales['zh_TW'] = array('identifier' => 'zh_TW', 'identifierData' => array (
  'language' => 'zh',
  'script' => NULL,
  'territory' => 'TW',
  'variant' => NULL,
  'options' => 
  array (
  ),
  'locale_str' => 'zh_TW',
  'option_str' => NULL,
), 'parameters' => array (
  'description' => '繁體中文',
));
$this->translators['default']['msg'] = new AgaviGettextTranslator();
$this->translators['default']['msg']->initialize($this->getContext(), array (
  'text_domains' => 
  array (
    'menu' => 'C:\\workspace\\bloggie\\app/data/i18n',
    'layout' => 'C:\\workspace\\bloggie\\app/data/i18n',
    'Login' => 'C:\\workspace\\bloggie\\app/data/i18n',
    'SearchEngineSpam' => 'C:\\workspace\\bloggie\\app/data/i18n',
    'ErrorActions' => 'C:\\workspace\\bloggie\\app/data/i18n',
  ),
));
$this->translatorFilters['default']['msg'] = array (
);
$this->translators['default']['num'] = new AgaviNumberFormatter();
$this->translators['default']['num']->initialize($this->getContext(), array (
));
$this->translatorFilters['default']['num'] = array (
);
$this->translators['default']['cur'] = new AgaviCurrencyFormatter();
$this->translators['default']['cur']->initialize($this->getContext(), array (
));
$this->translatorFilters['default']['cur'] = array (
);
$this->translators['default']['date'] = new AgaviDateFormatter();
$this->translators['default']['date']->initialize($this->getContext(), array (
  'type' => 'date',
  'format' => 'full',
));
$this->translatorFilters['default']['date'] = array (
);
$this->translators['default.errors']['msg'] = new AgaviSimpleTranslator();
$this->translators['default.errors']['msg']->initialize($this->getContext(), array (
  'Login' => 
  array (
    'de' => 
    array (
      'Wrong Password' => 'Falsches Passwort',
      'Wrong Username' => 'Ungültiger Benutzername',
      'Please supply a password.' => 'Bitte geben Sie ein Kennwort ein.',
      'The username you supplied is fewer than 5 characters long.' => 'Der angegebene Benutzername ist weniger als fünf Zeichen lang.',
    ),
  ),
));
$this->translatorFilters['default.errors']['msg'] = array (
);

?>