<?php foreach ($kirby->languages() as $language) : ?>
<link rel="alternate" hreflang="<?php echo strtolower(html($language->code())); ?>" href="<?= $page->url($language->code()); ?>" />
<?php endforeach; ?>
<link rel="alternate" hreflang="x-default" href="<?= $page->url($kirby->defaultLanguage()->code()); ?>" />