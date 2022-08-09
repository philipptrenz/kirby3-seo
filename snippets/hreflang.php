<?php foreach ($kirby->languages() as $language) : ?>
<link rel="alternate" hreflang="<?php echo strtolower(html($language->code())); ?>" href="<?= $page->url($language->code()); ?>" />
<?php endforeach; ?>
<link rel="alternate" hreflang="x-default" href="<?= $page->url($kirby->defaultLanguage()->code()); ?>" />
<?php 
    // Add canonical link for pages that have not been translated
    $isTranslated = $page->translation($language->code())->exists();
    if ($language->isDefault() === false && $isTranslated === false): 
?>
<link rel="canonical" link="<?= $isTranslated ? $page->url(): $page->url($kirby->defaultLanguage()->code())?>"/>
<?php 
    endif 
?>