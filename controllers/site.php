<?php

return function ($page, $kirby, $site) {

    $shareimage = ' ';
    if ($img = $page->shareimage()->toFile()) {
        $shareimage = $img->crop(1280, 720)->url();
    } else if ($img = $site->shareimage()->toFile()) {
        $shareimage = $img->crop(1280, 720)->url();
    }

    return [

        // Meta
        'metatitle'         => ($page->seotitle()->isNotEmpty() ? $page->seotitle() : $page->title()).' | '.$site->title(),
        'metadesc'          => $page->seometa(),
        'metakeywords'      => $page->seotags(),
        'metarobots'        => $site->globalNoIndex()->toBool() ? 'none' : ( $page->noIndex()->toBool() ? 'noindex' : 'index' ) . ',' . ( $page->noFollow()->toBool() ? 'nofollow' : 'follow' ),
        'metaurl'           => $page->url(),
        'metaimage'         => $shareimage,

        // Facebook Meta
        'metafbtype'         => 'website',
        'metafbsitename'     => $site->title(),
        'metafblocale'       => $kirby->language() !== null ? $kirby->language()->locale(LC_ALL) : 'en_GB',

        // Twitter Meta
        'metatwcard'         => 'summary_large_image',
        'metatwsite'         => $site->socialtwitterurl()->isNotEmpty() ? $site->socialtwitterurl() : ' ',
        'metatwcreator'      => $site->twittercreator()->isNotEmpty() ? $site->twittercreator() : ' ',

    ];
};
