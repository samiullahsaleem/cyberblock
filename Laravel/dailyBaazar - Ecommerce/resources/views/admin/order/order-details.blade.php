@extends('layouts.admin')
@section('title', 'Order Details')
@section('content')

<style type="text/css" data-tag-name="trix-editor">
    trix-editor {
        display: block;
    }

    trix-editor:empty:not(:focus)::before {
        content: attr(placeholder);
        color: graytext;
        cursor: text;
    }

    trix-editor a[contenteditable=false] {
        cursor: text;
    }

    trix-editor img {
        max-width: 100%;
        height: auto;
    }

    trix-editor [data-trix-attachment] figcaption textarea {
        resize: none;
    }

    trix-editor [data-trix-attachment] figcaption textarea.trix-autoresize-clone {
        position: absolute;
        left: -9999px;
        max-height: 0px;
    }

    trix-editor [data-trix-attachment] figcaption[data-trix-placeholder]:empty::before {
        content: attr(data-trix-placeholder);
        color: graytext;
    }

    trix-editor [data-trix-cursor-target] {
        display: inline-block !important;
        width: 1px !important;
        padding: 0 !important;
        margin: 0 !important;
        border: none !important;
    }

    trix-editor [data-trix-cursor-target=left] {
        vertical-align: top !important;
        margin-left: -1px !important;
    }

    trix-editor [data-trix-cursor-target=right] {
        vertical-align: bottom !important;
        margin-right: -1px !important;
    }

</style>
<style type="text/css" data-tag-name="trix-toolbar">
    trix-toolbar {
        display: block;
    }

    trix-toolbar {
        white-space: nowrap;
    }

    trix-toolbar [data-trix-dialog] {
        display: none;
    }

    trix-toolbar [data-trix-dialog][data-trix-active] {
        display: block;
    }

    trix-toolbar [data-trix-dialog] [data-trix-validate]:invalid {
        background-color: #ffdddd;
    }

</style>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="referrer" content="never">
<meta data-react-html="true" name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover, user-scalable=no">
<meta data-react-html="true" name="apple-mobile-web-app-capable" content="yes">
<meta data-react-html="true" name="apple-mobile-web-app-status-bar-style" content="black">
<link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/vendors~Admin~internal~section-flow~section-flow-summary~section-flow-template-installer~section-flo~67560caa-da74327255a921063014b93a350cde95232ab12445903cd4c054dd790b472f56.css" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/vendors~Admin~internal~section-apps~section-apps-app-details~section-flow~section-flow-connector~sec~886ec812-d399c7a88b9def638f0e6090adbf93c63487fd48f111f883b928fd01a9f7724f.css" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/vendors~Admin~section-flow-summary~section-flow-v2-editor~section-flow-v2-list~section-flow-v2-run~s~d6dd756b-8f934264b5990bad39c9d00ea1bfb28899a1804c3fab899829947dd05d994554.css" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/vendors~Admin~error~plus~redirectLoop-52d01a3fab9db21035fb144d99b9fd68dc5421a80a1e6f66d2ceecc392714a2a.css" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/vendors~Admin~error~plus-7ef16ed3ca267fae1895131e2419f991293acca58903dd8fa535dfccb6d37c07.css" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/vendors~Admin~section-flow~section-flow-summary-d7573b2ea537d3e78f0e81a73fb8f01ab15911ddaded42fe8113529b8eda63a6.css" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/vendors~Admin~redirectLoop-397c5c84c3e19be74054e73232b51687a919eb05e9823b4fd9288f500e618db7.css" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/vendors~Admin-5922f9e5df8c35d5e240a6eae550509b8bb11f1a0e54a31b63551788bb7cbd7f.css" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/Admin-9c830cc9d44f554e374d96163ebcff1e11e0e5f67289567bb09426ad3cc86738.css" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/quickSearch-152d4093b196eb2a0b3adc64132a5b0c9c9560c61309458fff2a6b6cd75d0c38.css" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/vendors~homeIndex-4c3b2b75713db5b54310dba1bd35990edc57395680a2e5d3de093e8b93106308.css" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/analyticsOnlineStoreSpeed~homeIndex~mtOverview~shippingSettingsIndex-a832e8799ccf7ad12d39484fb29d781f4c02ce3410ef2a6c93a8268bf4949823.css" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/homeIndex-04943142203a598dc1fbad624fe393383eee1ab4079ec1a5263708d26e9d2140.css" crossorigin="anonymous">
<script type="text/javascript" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/vendors~Admin~internal~section-flow~section-flow-summary~section-flow-template-installer~section-flo~67560caa-3eaeb09e3922064089bc8e19d13c37cb59fe1dec56a6e92335b6ef3d23f066a8.js" crossorigin="anonymous" defer=""></script>
<script type="text/javascript" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/vendors~Admin~internal~section-apps~section-apps-app-details~section-flow~section-flow-connector~sec~886ec812-757a46e8a40649312a90262625d89eb41cdb6d5283343835bd98511d9c77c68b.js" crossorigin="anonymous" defer=""></script>
<script type="text/javascript" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/vendors~Admin~section-flow-summary~section-flow-v2-editor~section-flow-v2-list~section-flow-v2-run~s~d6dd756b-deb60a421b3b84dc56cd23a7e22caf9021c5964f957f78167eba8112fee3212b.js" crossorigin="anonymous" defer=""></script>
<script type="text/javascript" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/vendors~Admin~error~plus~redirectLoop-7046775863a4bdd2a1aa2bef72416bae519484fb0fd5f3aee240c7f059136368.js" crossorigin="anonymous" defer=""></script>
<script type="text/javascript" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/vendors~Admin~section-home~section-home-bfcm~section-roles-roles-details-44edda65477a61f535db353632d332c715acd81ad841acf56b739324b26c003c.js" crossorigin="anonymous" defer=""></script>
<script type="text/javascript" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/vendors~Admin~error~plus-54eb9cf43be0e647521d1482e9d4e28530450d71879b132047544dd944b42cc0.js" crossorigin="anonymous" defer=""></script>
<script type="text/javascript" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/vendors~Admin~section-flow~section-flow-summary-1672f81f83328d124c5fa5924b79543552d77552559dc6d8a388c4550d5d7c98.js" crossorigin="anonymous" defer=""></script>
<script type="text/javascript" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/vendors~Admin~redirectLoop-4a2792446a14395f5c907d6bca0f07d5d78750e8e2312dc61c4d784294f0d7e1.js" crossorigin="anonymous" defer=""></script>
<script type="text/javascript" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/vendors~Admin-1abf7f6d27fffeef5caa29a93066a52adc293e9ddb76bdeecba745877cf8dce8.js" crossorigin="anonymous" defer=""></script>
<script type="text/javascript" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/Admin-7ba320d7ac0786f63c92f57033edd2ce1e47275689592c34ead8ea31f820c0fe.js" crossorigin="anonymous" defer=""></script>
<script type="text/javascript" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/quickSearch-9390605787f1aca51db967efb00584529b44860dc4d65aaadac5ac4f6959292b.js" crossorigin="anonymous" defer=""></script>
<script type="text/javascript" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/vendors~homeIndex-a568decb1f900e72911993adbf6686e0b4c21522c045f05d5c6089ffdf29ec35.js" crossorigin="anonymous" defer=""></script>
<script type="text/javascript" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/analyticsOnlineStoreSpeed~homeIndex~mtOverview~shippingSettingsIndex-da78a9067ef1b5727ca43d91c11c65cf89aab6840e535a711b93108c6944a8d6.js" crossorigin="anonymous" defer=""></script>
<script type="text/javascript" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/homeIndex-dde6edcfbcf0dc8e012a2002ef812466cf90b6ff52c3b0b3e65c7cd8e1cbfbde.js" crossorigin="anonymous" defer=""></script>
<script type="text/javascript" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/homeIndexQuery-5e694a9bfb2bcbf3be266758bae36c8777cfbfc41e0c177286b51542185c13c5.js" crossorigin="anonymous" defer=""></script>
<script type="text/javascript" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/homeFeedQuery-3423073f4efd6843270f5712aa946fc72eb414dea36a75c99130591426d94a9c.js" crossorigin="anonymous" defer=""></script>
<script type="text/javascript" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/LoginNotifications-3f434ba415e4f8810f9584cdc3c13c55bfff417f3b525bdd3af9bc20032a5936.js" crossorigin="anonymous" defer=""></script>
<script type="text/javascript" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/runtime~main-3e5023cc56b09e0bd55a1fbf3c74675b9f687d038ebe312a1623ba77d8d496fb.js" integrity="sha256-PlAjzFawngvVWh+/PHRnW59ofQOOvjEqFiO6d9jUlvs=" crossorigin="anonymous" defer=""></script>
<script type="text/javascript" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/vendors~internal~main~section-home~section-home-bfcm~section-storeadmin-storeapp~section-users-users-invite-cd4ce9f8036189e0c0aa95d98c6ee5bd84361b7ae31788c2756db1ef5a0dab23.js" integrity="sha256-zUzp+ANhieDAqpXZjG7lvYQ2G3rjF4jCdW2x71oNqyM=" crossorigin="anonymous" defer=""></script>
<script type="text/javascript" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/vendors~error~internal~main~plus~redirectLoop-58ab7d6ac11e6504de41b994cd23a91fa7462926bbd7bb7b1cb583efb298720e.js" integrity="sha256-WKt9asEeZQTeQbmUzSOpH6dGKSa717t7HLWD77KYcg4=" crossorigin="anonymous" defer=""></script>
<script type="text/javascript" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/vendors~error~main~plus-af8d18356a2f289fe602b730b5149dafeca99e07a1753cf2a1ee014c20fc7397.js" integrity="sha256-r40YNWovKJ/mArcwtRSdr+ypngehdTzyoe4BTCD8c5c=" crossorigin="anonymous" defer=""></script>
<script type="text/javascript" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/vendors~main~section-storeadmin-storeapp-4bf5a3fa5177323a913e6f637e71feba60a677e5cccfdbbc7b8eb5e28efe46f2.js" integrity="sha256-S/Wj+lF3MjqRPm9jfnH+umCmd+XMz9u8e4614o7+RvI=" crossorigin="anonymous" defer=""></script>
<script type="text/javascript" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/vendors~main-476663c23ea4da247cc9c9c59ccd0bbdbc4644ee4eeaeb38ceeea92e9509282d.js" integrity="sha256-R2Zjwj6k2iR8ycnFnM0LvbxGRO5O6us4zu6pLpUJKC0=" crossorigin="anonymous" defer=""></script>
<script type="text/javascript" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/main-ee1c59db49bf7b1482a2777e2ec29d07b8e8f5e28eb22535d94980092aa2a873.js" integrity="sha256-7hxZ20m/exSCond+LsKdB7jo9eKOsiU12UmACSqiqHM=" crossorigin="anonymous" defer=""></script>
<link rel="prefetch" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/adminnextfallback-25b8e6ce5ba4e27dc3ebd7c3be9c55caad6efad3d7f4ab3174250cf4fc3b9ce5.css">
<link rel="prefetch" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/adminnextfallback-56d51c8cd7433d99fc28d8f3e29f79419679190c4096a55a796e449c43d83e87.js">
<link rel="prefetch" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/TopBarDestinationsSwitcherNext-785b116924b00e6e8e93268ac907b8f5d5de8d0694983b884ecfbfc52584c7a2.css">
<link rel="prefetch" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/TopBarDestinationsSwitcherNext-4b83da42a10c62432faa4dd4e596ab4de5294526204d0289c7234e1301de1fc9.js">
<link rel="prefetch" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/homeOnboardingQuery-473cd660db2c2583292653f4ecd3c14bd0758fd2afbd1f1e09ccd5adcc25e5ed.js">
<script charset="utf-8" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/vendors~Polaris-i18n-26b21506b29a1fe79ec2eea2e255f25895d9f76b333313f3ccbc3da90637d1fa.js"></script>
<script charset="utf-8" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/sift-9ace3cef3a9ea7c90452f97e7b6cd8b186f250e62cc6c09a9c69276a37452b99.js"></script>
<script charset="utf-8" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/vendors~MobileCompatibleCollectionShow~capitalAmendmentTermsDetails~capitalOfferAgreementDetails~col~2db63ec6-ffab1f20f407ff3e9a634d94225be0eca664cb86adf53192f1ab0b9392ee3657.js"></script>
<script charset="utf-8" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/shopify-encoders-524a3cd076301d7df31cc3aefefb03cfad40df70eeb2344fcb81bf7b30e3fec5.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/TopBarDestinationsSwitcherNext-785b116924b00e6e8e93268ac907b8f5d5de8d0694983b884ecfbfc52584c7a2.css">
<script charset="utf-8" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/TopBarDestinationsSwitcherNext-4b83da42a10c62432faa4dd4e596ab4de5294526204d0289c7234e1301de1fc9.js"></script>
<script charset="utf-8" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/switcherStoresQuery-ad78642d4a6704193332ec348feb613fc7af22d08a8cf12463696559bc4276da.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/vendors~AppBridgeAutoOpenModal~AppBridgeContextualSaveBar~AppBridgeLoading~AppBridgeModal~AppBridgeT~f8378938-cd516d6de26f94d6ad007ab424d416d7ce1b3a2c992bba41542e44cc098b3b81.css">
<script charset="utf-8" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/vendors~AppBridgeAutoOpenModal~AppBridgeContextualSaveBar~AppBridgeLoading~AppBridgeModal~AppBridgeT~f8378938-7faf25b07e220cf6543321b9cf81f0ae89d36d5be2cc57ef6bb29c3ee602bf4a.js"></script>
<script charset="utf-8" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/vendors~ManageProfile~createReturnLabel~orderIndex~orderListCustomizable~purchaseShippingLabels~repl~b1108c18-1e6fd6cc77415cb352c5a5c65a57bfdf81e5547510d8e807266748e48a29de78.js"></script>
<script charset="utf-8" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/ExportCustomersModal~automaticDiscountResourceList~discountCodeResourceList~discountCodeResourceList~6dea9bb8-7f01b5ebcca3c842dedd47c50f6db297605ea36a9dc4f12300cdee83abd6a85e.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/AddRemoveTagsModal~customerList~orderIndex~orderListCustomizable~productindex-fda696ce66ca26a8bba4df24358a97bda7d4e6c037cd64640758d90d35fe625c.css">
<script charset="utf-8" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/AddRemoveTagsModal~customerList~orderIndex~orderListCustomizable~productindex-77a6e99e7819cefc5053c02227cfa9aab59d8a09b7749f214ddc2208b8d57505.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/orderIndex~orderListCustomizable-bb5994fb2eb2db36c05d79a8a184d01cad35bc934b83be5fc3eb18a5bc31641e.css">
<script charset="utf-8" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/orderIndex~orderListCustomizable-359d33035782c3429b34064eb4821cb9a27dc8ab9e0c70516143f1edc8dd96bd.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/orderIndex-e89dd14269d25fa43a92393346d6e274a678ccca1b182da8b77afedfb156e8c1.css">
<script charset="utf-8" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/orderIndex-980546950c5a8e0d5bfcd63a6f5136765792cf2fa44395b859728ef0b9cbb7a8.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/MarkAsFulfilled~PreparePickup~RequestFulfillment~order~orderListCustomizable-eb73ac2f705c26f4b077ad7b80c67a7fde64d756069671905b5c9e94bfc9713c.css">
<script charset="utf-8" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/MarkAsFulfilled~PreparePickup~RequestFulfillment~order~orderListCustomizable-76bb7272062131a55c7169090310c28073e4526022234844b4c3c76cb2796781.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/collectionList~orderListCustomizable~pagename-dad52d4461e0538d0492aa55890214f4e24b8576217d247c93e67210b20fa38c.css">
<script charset="utf-8" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/collectionList~orderListCustomizable~pagename-ec2fbff94f59a561e0d962a5172df404bc9ba57e16a2b730572aa0486c636584.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/orderListCustomizable-0012c84793e04ec6a495a6569c8cbee6c37d7e7405ed7212bdc10f7d40ba98b2.css">
<script charset="utf-8" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/orderListCustomizable-18f1ec7fa6025f27ac1a707556ddce33a0f61c3cb34079f18f7f9fd2bfa34bc6.js"></script>
<script charset="utf-8" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/orderListSavedSearchesQuery-c7b924b9d261bc42b4b5cbaf2288d4cb8cabfde8da4cbca3d5891e8de0aea831.js"></script>
<script charset="utf-8" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/orderListInitialQuery-feb3fe28c66b4f8ce2372a30341b88c2d1eb95486177d0d72d43e2b608e01d87.js"></script>
<script charset="utf-8" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/orderListDataQuery-55d207c8c574523e48a56870f6d0a3be71785c5433dd3de3587d9f0ddc93658d.js"></script>
<script charset="utf-8" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/upcomingShippingPickupsQuery-bf3534ad4d9f4771d38eb1dd877e426e21327fa0195fd0e8202074f2c7769e78.js"></script>
<script charset="utf-8" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/vendors~MarkAsFulfilled~MobileCompatibleCollectionShow~Timeline~analyticsCustomReportsIndex~analytic~229b8f0d-e9c2c0c1785fc5031ed2d8a9036ea971e23aa1d75f0e7ecea61525950527a81e.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/vendors~order-c7b83608b1b03d8aa80a0463dd2e2bffe9b139390f34861915c5926f1948e282.css">
<script charset="utf-8" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/vendors~order-6b4f73bdeb2a8fdf3a4c9eea0f5b34bc48ea7f5b66b1928da64a7c4065a2d4d0.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/MarkAsFulfilled~RequestFulfillment~draftOrderDetails~order-51b85e994c5ce67955bedb6fac2eb82eeb1073e1410cf0cab94308a1158fc209.css">
<script charset="utf-8" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/MarkAsFulfilled~RequestFulfillment~draftOrderDetails~order-290f4b70aecb2d66e3fec533cbe745d61054e4abca01a9dfc89de19938880b18.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/draftOrderDetails~order-8383e71ba40b85ca133a11217bb2ac827e44b8bb96a57d9f1fc2f1e1912fa57b.css">
<script charset="utf-8" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/draftOrderDetails~order-872a5d9e303763482c2e3ac80ee4b17765268cf8dd7655825c81b611a828e9e4.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/order-a05d0a25eb0e131b0f197bf82b31e16acdbc8e52b5fe29ecfdaf5d5ece6a0c0a.css">
<script charset="utf-8" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/order-13a4f7d0dcdba8dd619785bc7c861136e7eeed90509bd064605edc26ccd3044b.js"></script>
<script charset="utf-8" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/orderDetailsQuery-d392097f9ecf25f4909a0899eae0c27222c9e82cf73c0559fcbeb7ad5a6c64c8.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/PagePresence-566c4a11b98c08351e3cacb7f8595c0896a3b2d4e434e9dd8f5273832dfc2f13.css">
<script charset="utf-8" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/PagePresence-7e8529d81a1322f65baa48c4c3f957aca94c6b9c692e6436fb80461dc7407128.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/vendors~AppBridgeAutoOpenModal~AppBridgeContextualSaveBar~AppBridgeLoading~AppBridgeModal~AppBridgeT~b6aabeaf-6089ac47e6846d8fa846b0266537fde9cb2bf2dd2897dc99b49e10c4e8f065c9.css">
<script charset="utf-8" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/vendors~AppBridgeAutoOpenModal~AppBridgeContextualSaveBar~AppBridgeLoading~AppBridgeModal~AppBridgeT~b6aabeaf-12b8971d1dcc0600882fd0efec7ab2f68c9f38a0ac8fb2935f4a2c62d1fdc047.js"></script>
<script charset="utf-8" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/vendors~ManageZonesModal~Timeline~VirtualizedOptionsList-98b566f7137c7c56dddb657752954a9310149230d46be1a890e46d358fe963d1.js"></script>
<script charset="utf-8" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/MobileCompatibleCollectionShow~ShopImagePicker~Timeline~collectiondetails~productdetails~productvari~e3f6d10c-5d43ae6d0d39226e94164d8d1af2a4d397ee597fa077cb332d4d4ac0769ac69b.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/Timeline-3ad651feced71d6f13c6f4be8a50c6e0635902b191e41513d3408305beab609b.css">
<script charset="utf-8" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/Timeline-93d779d9c5db9c4af1bd985c2fc0fee9c4ab54e6c7a0557e80523af137e1ce6d.js"></script>
<script charset="utf-8" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/vendors~trix-b04d3fed7b47a768a56b15c9251a3391ab0f577c2e71d8d35393de4b655ecb90.js"></script>
<script charset="utf-8" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/bundledFlags-3546aea09b2181be15692dc02f1d9738a3fa1ea01cd8d49e33e2b259a5a30708.js"></script>
<script charset="utf-8" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/EditCustomerContactInfoModal-7b1e2147ff0e93ef11765fc3494f438b89286981a9337322fe2d1ce60ae1e626.js"></script>

<div class="Polaris-Frame__ContextualSaveBar_14m7v Polaris-Frame-CSSAnimation--startFade_1gu4x"></div>
<main class="Polaris-Frame__Main_yj28s Polaris-Frame__Main--newDesignLanguage_129jf" id="AppFrameMain" data-has-global-ribbon="false"><a id="AppFrameMainContent" tabindex="-1"></a>
<div class="Polaris-Frame__Content_xd1mk">
<div class="Polaris-Page_yisnh Polaris-Page--newDesignLanguage_1rik8">
<div class="Polaris-Page-Header_z4uwg Polaris-Page-Header--hasNavigation_gfpa8 Polaris-Page-Header--hasActionMenu_1wx04 Polaris-Page-Header--mobileView_i07vm Polaris-Page-Header--newDesignLanguage_1rik8 Polaris-Page-Header--mediumTitle_bfol6">
<div class="Polaris-Page-Header__Row_375v7 Polaris-Page-Header__RowCondensed_1gexu">
<div class="Polaris-Page-Header__BreadcrumbWrapper_1tgwk Polaris-Page-Header--newDesignLanguage_1rik8">
<nav role="navigation"><a data-polaris-unstyled="true" class="Polaris-Breadcrumbs__Breadcrumb_llsun Polaris-Breadcrumbs--newDesignLanguage_1rik8" href="/order"><span class="Polaris-Breadcrumbs__ContentWrapper_1yvfo"><span class="Polaris-Breadcrumbs__Icon_yj27d"><span class="Polaris-Icon_yj27d Polaris-Icon--newDesignLanguage_1rik8"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
<path d="M17 9H5.414l3.293-3.293a.999.999 0 1 0-1.414-1.414l-5 5a.999.999 0 0 0 0 1.414l5 5a.997.997 0 0 0 1.414 0 .999.999 0 0 0 0-1.414L5.414 11H17a1 1 0 1 0 0-2z"></path>
</svg></span></span><span class="Polaris-VisuallyHidden_yrtt5">Orders</span></span></a></nav>
</div>
<div class="Polaris-Page-Header__TitleWrapper_bejfn">
<div>
<div class="Polaris-Header-Title__TitleAndSubtitleWrapper_40sxf">
<div class="Polaris-Header-Title__TitleWithMetadataWrapper_pdqv7 Polaris-Header-Title--newDesignLanguage_1rik8">
<div class="Polaris-Header-Title_2qj8j">
<h1 class="Polaris-Header-Title--newDesignLanguageTitle_1wh8d">#{{$order->id}}</h1>

</div><div class="Polaris-ActionMenu-Actions__ActionsLayout_w56ri Polaris-ActionMenu-Actions--newDesignLanguage_1rik8">
<div class="Polaris-ButtonGroup_yy85z Polaris-ButtonGroup--extraTight_1xh3x">
    <div class="Polaris-ButtonGroup__Item_yiyol"><span class="Polaris-ActionMenu-SecondaryAction_1dl4i Polaris-ActionMenu-SecondaryAction--newDesignLanguage_1rik8"><a data-polaris-unstyled="true" id="edit" class="Polaris-Button_r99lw Polaris-Button--newDesignLanguage_1rik8" href="order.html"><span class="Polaris-Button__Content_xd1mk"><span class="Polaris-Button__Text_yj3uv">Refund</span></span></a></span></div>
    <div class="Polaris-ButtonGroup__Item_yiyol">
        
    </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="Polaris-Page-Header__Row_375v7">
<div class="Polaris-Page-Header__LeftAlign_1d6sz">
<div class="Polaris-Page-Header__AdditionalMetaData_1isxr"><span class="Polaris-TextStyle--variationSubdued_1segu">Created at <?php echo date("F j, Y, g:i a", strtotime($order->created_at));  ?></span></div>
</div>
<div class="Polaris-Page-Header__RightAlign_1ok1p">
<div class="Polaris-Page-Header__AdditionalNavigationWrapper_1kkex"></div>
</div>
</div>
</div>
<div class="Polaris-Page__Content_xd1mk">
<div>
<div class="Rb_fs">
<div class="_3laKY"></div>
</div>
<section class="P3455">
<div class="XCAiw">
<div class="Polaris-Card_yis1o Polaris-Card--newDesignLanguage_1rik8">
<div class="Polaris-Card__Header_z4uwg">
<div class="_3TJVs"><span class="_3rVnE"><span class="Polaris-Icon_yj27d Polaris-Icon--colorGreenDark_1cz3u Polaris-Icon--isColored_uhqnf Polaris-Icon--hasBackdrop_1anyy Polaris-Icon--newDesignLanguage_1rik8"><svg viewBox="0 0 17 17" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
<circle cx="8.5" cy="8.59" r="7.52" fill="currentColor"></circle>
<path d="M8.5 17a8.36 8.36 0 118.35-8.36A8.35 8.35 0 018.5 17zm0-15a6.69 6.69 0 106.68 6.68A6.68 6.68 0 008.5 1.91z"></path>
<path class="halo-success_svg__cls-2" d="M7.66 11.09a.82.82 0 01-.59-.24L5.4 9.18A.84.84 0 015.45 8a.82.82 0 011.13 0l1.08 1.08 2.75-2.75a.83.83 0 011.18 1.18l-3.34 3.34a.82.82 0 01-.59.24z"></path>
</svg></span></span>

@php $qty = 0;  @endphp
@foreach ($items as $item)
    @if ($order->id == $item->order_id)
        <?php $qty++; ?>
    @endif
@endforeach   

<div class="_1UHYc">
<h2 class="Polaris-Heading_1brcv">Items ({{$qty}})</h2>
</div>
</div>
</div>
<div class="">
<div class="Polaris-Card__Section_1b1h1">
<div class="Polaris-Card__Subsection_197ob">
<ul class="_1107R">
<?php $subtotal = 0; ?>
@foreach ($items as $item)
@php $subtotal = $subtotal + ($item->product_price * $item->product_quantity); @endphp
<li class="_1XtKD">
<div class="_2ysro _1LZu7">
<div class="sdK5R">
<div class="_2dXGy">
<div class="_2E0xL"><span class="Polaris-Badge_2qgie">{{$item->product_quantity}}</span></div><span class="Polaris-Thumbnail_15hj1 Polaris-Thumbnail--sizeSmall_7647q"><img src="{{asset('img/product-img/main/'.$item->product_image.'')}}" alt=""></span>
</div>
</div>
<div class="_18dua">
<div class="_3pTEV">
<div class="_1Hwi_">
<div><a data-polaris-unstyled="true" class="Polaris-Link_yj5sy">{{$item->product_title}}</a></div>
</div>
<div class="_15gHI">${{$item->product_price}} × {{$item->product_quantity}}</div>
<div class="_2cNEq">${{$item->product_price * $item->product_quantity}}</div>
</div>
<div>
<ul class="Polaris-List_yj3nl"></ul>
</div>
</div>
</div>
</li>
@endforeach

</ul>
</div>
</div>
<div class="_1CFpJ">
<div class="Polaris-Card__Section_1b1h1">
<div class="Polaris-Stack_32wu2 Polaris-Stack--spacingTight_1o4d6 Polaris-Stack--distributionTrailing_z5d5z">
<div class="Polaris-Stack__Item_yiyol">

</div>
<div class="Polaris-Stack__Item_yiyol"><button class="Polaris-Button_r99lw Polaris-Button--newDesignLanguage_1rik8 Polaris-Button--primary_7k9zs" type="button"><span class="Polaris-Button__Content_xd1mk"><span class="Polaris-Button__Text_yj3uv">Add tracking</span></span></button></div>
</div>
</div>
</div>
</div>
</div>
<div class="Polaris-Card_yis1o Polaris-Card--newDesignLanguage_1rik8">
<div class="Polaris-Card__Header_z4uwg">
<div class="Polaris-Stack_32wu2 Polaris-Stack--spacingTight_1o4d6 Polaris-Stack--alignmentCenter_1rtaw">
<div class="Polaris-Stack__Item_yiyol"><span class="_3PuJN"><span class="Polaris-Icon_yj27d Polaris-Icon--colorGreenDark_1cz3u Polaris-Icon--isColored_uhqnf Polaris-Icon--hasBackdrop_1anyy Polaris-Icon--newDesignLanguage_1rik8"><svg viewBox="0 0 17 17" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
<circle cx="8.5" cy="8.59" r="7.52" fill="currentColor"></circle>
<path d="M8.5 17a8.36 8.36 0 118.35-8.36A8.35 8.35 0 018.5 17zm0-15a6.69 6.69 0 106.68 6.68A6.68 6.68 0 008.5 1.91z"></path>
<path class="halo-success_svg__cls-2" d="M7.66 11.09a.82.82 0 01-.59-.24L5.4 9.18A.84.84 0 015.45 8a.82.82 0 011.13 0l1.08 1.08 2.75-2.75a.83.83 0 011.18 1.18l-3.34 3.34a.82.82 0 01-.59.24z"></path>
</svg></span></span></div>
<div class="Polaris-Stack__Item_yiyol">
<h2 class="Polaris-Heading_1brcv">Paid</h2>
</div>
</div>
</div>
<div class="Polaris-Card__Section_1b1h1">
<div class="_3laKY"></div>
<div class="Polaris-Card__Subsection_197ob">
<div class="xkRJB">
<div class="vLfGs _3RojQ"><span><span class="">Subtotal</span></span>
<div class="_3zI3E">
<div class="_3umNZ">
<div class="_1BtPd">
<p><span class="Polaris-TextStyle--variationSubdued_1segu">{{$qty}} items</span></p>
<div class="uQ1bp"><span class="">${{$subtotal}}</span></div>
</div>
</div>
</div>
</div>
<div class="vLfGs _3RojQ"><span><span class=""><span class="">Tax</span></span></span>
<div class="_3zI3E">
<div class="_3umNZ">
<div class="_1BtPd">
<p><span class="Polaris-TextStyle--variationSubdued_1segu">IGST 10%</span></p>
<div class="uQ1bp"><span class="">${{$subtotal/10}}</span></div>
</div>
</div>
</div>
</div>
<div class="vLfGs"><span><span class="Polaris-TextStyle--variationStrong_rpyvj">Total</span></span>
<div class="_3zI3E">
<div class="_3umNZ">
<div class="_1BtPd">
<p><span class="Polaris-TextStyle--variationSubdued_1segu"></span></p>
<div class="uQ1bp"><span class="Polaris-TextStyle--variationStrong_rpyvj">${{$subtotal + ($subtotal/10)}}</span></div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="Polaris-Card__Subsection_197ob">
<div class="_1dKXB">
<div class="vLfGs"><span><span class="">Paid by customer</span></span>
<div class="_3zI3E">
<div class="_3umNZ">
<div class="_1BtPd">
<p><span class="Polaris-TextStyle--variationSubdued_1segu"></span></p>
<div class="uQ1bp"><span class="">${{$total}}</span></div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="vZjhm"></div>
</div>
</div>
<div class="UIJjo">
<div class="_2qYe2">
<h2 class="Polaris-Heading_1brcv">Timeline</h2>
<div class="_2RNxW"><label class="Polaris-Choice_j5gzq" for="PolarisCheckbox3"><span class="Polaris-Choice__Control_1u8vs"><span class="Polaris-Checkbox_1d6zr Polaris-Checkbox--newDesignLanguage_1rik8"><input id="PolarisCheckbox3" type="checkbox" class="Polaris-Checkbox__Input_30ock" aria-invalid="false" role="checkbox" aria-checked="true" value="" checked=""><span class="Polaris-Checkbox__Backdrop_1x2i2"></span><span class="Polaris-Checkbox__Icon_yj27d"><span class="Polaris-Icon_yj27d Polaris-Icon--newDesignLanguage_1rik8"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
<path d="M8.315 13.859l-3.182-3.417a.506.506 0 0 1 0-.684l.643-.683a.437.437 0 0 1 .642 0l2.22 2.393 4.942-5.327a.436.436 0 0 1 .643 0l.643.684a.504.504 0 0 1 0 .683l-5.91 6.35a.437.437 0 0 1-.642 0"></path>
</svg></span></span></span></span><span class="Polaris-Choice__Label_2vd36">Show comments</span></label></div>
</div>
<div class="pxnRY _1ErHn">
<div class="PMONs _1ErHn _36KPg">
<div class="_167Be"><span aria-label="Avatar with initials D E" role="img" class="Polaris-Avatar_z763p Polaris-Avatar--sizeMedium_5f35p Polaris-Avatar--styleFour_16hgi Polaris-Avatar--hasImage_1hz8x"><img src="https://mir-s3-cdn-cf.behance.net/user/115/248bc1144803971.5f5595eecddb3.png" class="Polaris-Avatar__Image_2qgms" alt="" role="presentation"></span></div>
<div class="_3isSS">
<div>
<div>
<div class="_3y343">
<div class="zCLkB"><label for="TimelineEditor1" class="_3ujpI">Comment</label>
<div class="_38_Ci">
<trix-toolbar id="trix-toolbar-3" style="display: none;">
<div class="trix-button-row">
<span class="trix-button-group trix-button-group--text-tools" data-trix-button-group="text-tools">
<button type="button" class="trix-button trix-button--icon trix-button--icon-bold" data-trix-attribute="bold" data-trix-key="b" title="Bold" tabindex="-1" aria-controls="Popover3" aria-owns="Popover3" aria-haspopup="true" aria-expanded="false">Bold</button>
<button type="button" class="trix-button trix-button--icon trix-button--icon-italic" data-trix-attribute="italic" data-trix-key="i" title="Italic" tabindex="-1">Italic</button>
<button type="button" class="trix-button trix-button--icon trix-button--icon-strike" data-trix-attribute="strike" title="Strikethrough" tabindex="-1">Strikethrough</button>
<button type="button" class="trix-button trix-button--icon trix-button--icon-link" data-trix-attribute="href" data-trix-action="link" data-trix-key="k" title="Link" tabindex="-1">Link</button>
</span>

<span class="trix-button-group trix-button-group--block-tools" data-trix-button-group="block-tools">
<button type="button" class="trix-button trix-button--icon trix-button--icon-heading-1" data-trix-attribute="heading1" title="Heading" tabindex="-1">Heading</button>
<button type="button" class="trix-button trix-button--icon trix-button--icon-quote" data-trix-attribute="quote" title="Quote" tabindex="-1">Quote</button>
<button type="button" class="trix-button trix-button--icon trix-button--icon-code" data-trix-attribute="code" title="Code" tabindex="-1">Code</button>
<button type="button" class="trix-button trix-button--icon trix-button--icon-bullet-list" data-trix-attribute="bullet" title="Bullets" tabindex="-1">Bullets</button>
<button type="button" class="trix-button trix-button--icon trix-button--icon-number-list" data-trix-attribute="number" title="Numbers" tabindex="-1">Numbers</button>
<button type="button" class="trix-button trix-button--icon trix-button--icon-decrease-nesting-level" data-trix-action="decreaseNestingLevel" title="Decrease Level" tabindex="-1">Decrease Level</button>
<button type="button" class="trix-button trix-button--icon trix-button--icon-increase-nesting-level" data-trix-action="increaseNestingLevel" title="Increase Level" tabindex="-1">Increase Level</button>
</span>

<span class="trix-button-group trix-button-group--file-tools" data-trix-button-group="file-tools">
<button type="button" class="trix-button trix-button--icon trix-button--icon-attach" data-trix-action="attachFiles" title="Attach Files" tabindex="-1">Attach Files</button>
</span>

<span class="trix-button-group-spacer"></span>

<span class="trix-button-group trix-button-group--history-tools" data-trix-button-group="history-tools">
<button type="button" class="trix-button trix-button--icon trix-button--icon-undo" data-trix-action="undo" data-trix-key="z" title="Undo" tabindex="-1">Undo</button>
<button type="button" class="trix-button trix-button--icon trix-button--icon-redo" data-trix-action="redo" data-trix-key="shift+z" title="Redo" tabindex="-1">Redo</button>
</span>
</div>

<div class="trix-dialogs" data-trix-dialogs="">
<div class="trix-dialog trix-dialog--link" data-trix-dialog="href" data-trix-dialog-attribute="href">
<div class="trix-dialog__link-fields">
<input type="url" name="href" class="trix-input trix-input--dialog" placeholder="Enter a URL…" aria-label="URL" required="" data-trix-input="" disabled="disabled">
<div class="trix-button-group">
<input type="button" class="trix-button trix-button--dialog" value="Link" data-trix-method="setAttribute">
<input type="button" class="trix-button trix-button--dialog" value="Unlink" data-trix-method="removeAttribute">
</div>
</div>
</div>
</div>
</trix-toolbar>
<trix-editor input="trix-input-TimelineEditor1" id="TimelineEditor1" class="_17KGv" placeholder="Leave a comment..." aria-describedby="TimelineEditor1HelpText" contenteditable="" role="textbox" trix-id="3" toolbar="trix-toolbar-3"></trix-editor><input id="trix-input-TimelineEditor1" type="hidden">
</div>
<div class="_2Kd6e">
<div class="R5T_p">
<div><span><button tabindex="0" class="_2Em4_" aria-label="Add emoji" type="button" aria-describedby="PolarisTooltipContent38" aria-controls="Polarispopover113" aria-owns="Polarispopover113" aria-expanded="false"><span class="Polaris-Icon_yj27d Polaris-Icon--newDesignLanguage_1rik8"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
<path fill-rule="evenodd" d="M10 20c5.523 0 10-4.477 10-10S15.523 0 10 0 0 4.477 0 10s4.477 10 10 10zM7.707 8.707a1 1 0 1 1-1.414-1.414 1 1 0 0 1 1.414 1.414zm4.586-1.414a1 1 0 1 1 1.414 1.414 1 1 0 0 1-1.414-1.414zm.011 4.988c-.03.03-.786.72-2.304.72-1.497 0-2.252-.67-2.303-.718a1 1 0 0 0-1.404 1.424C6.425 13.84 7.653 15 10 15c2.346 0 3.575-1.16 3.707-1.293a.993.993 0 0 0 .005-1.397 1.006 1.006 0 0 0-1.408-.029z"></path>
</svg></span></button></span></div>
<div><span><button tabindex="0" class="_2Em4_" aria-label="Mention staff" type="button" aria-describedby="PolarisTooltipContent39" aria-controls="Polarispopover114" aria-owns="Polarispopover114" aria-expanded="false"><span class="Polaris-Icon_yj27d Polaris-Icon--newDesignLanguage_1rik8"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
<path d="M10 13c-1.654 0-3-1.346-3-3s1.346-3 3-3 3 1.346 3 3-1.346 3-3 3zm0-13C4.486 0 0 4.486 0 10s4.486 10 10 10a1 1 0 0 0 0-2c-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8v1c0 .827-.673 1.5-1.5 1.5S15 11.827 15 11v-1c0-2.757-2.243-5-5-5s-5 2.243-5 5 2.243 5 5 5c1.531 0 2.887-.707 3.805-1.795A3.477 3.477 0 0 0 16.5 14.5c1.93 0 3.5-1.57 3.5-3.5v-1c0-5.514-4.486-10-10-10z"></path>
</svg></span></button></span></div>
<div class="_2RcSE">
<div><span><button tabindex="0" class="_2Em4_" aria-label="Reference page" type="button" aria-describedby="PolarisTooltipContent40" aria-controls="Polarispopover115" aria-owns="Polarispopover115" aria-expanded="false"><span class="Polaris-Icon_yj27d Polaris-Icon--newDesignLanguage_1rik8"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
<path fill-rule="evenodd" d="M7.992 2.124a1 1 0 1 0-1.984-.248L5.618 5H2a1 1 0 0 0 0 2h3.367l-.75 6H2a1 1 0 1 0 0 2h2.367l-.36 2.876a1 1 0 1 0 1.985.248L6.382 15h5.985l-.36 2.876a1 1 0 0 0 1.985.248l.39-3.124H18a1 1 0 1 0 0-2h-3.367l.75-6H18a1 1 0 1 0 0-2h-2.367l.36-2.876a1 1 0 1 0-1.985-.248L13.618 5H7.632l.36-2.876zM12.617 13l.75-6H7.383l-.75 6h5.984z"></path>
</svg></span></button></span></div>
<div tabindex="-1" aria-controls="Polarispopover116" aria-owns="Polarispopover116" aria-expanded="false">
<div class="IQGWB"></div>
</div>
</div><span><button tabindex="0" class="_2Em4_" aria-label="Attach file" type="button" aria-describedby="PolarisTooltipContent41"><span class="Polaris-Icon_yj27d Polaris-Icon--newDesignLanguage_1rik8"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
<path d="M5.243 20a5.228 5.228 0 0 1-3.707-1.533A5.213 5.213 0 0 1 0 14.759c0-1.402.546-2.719 1.536-3.708l9.515-9.519a5.25 5.25 0 0 1 8.553 1.7A5.21 5.21 0 0 1 20 5.24a5.208 5.208 0 0 1-1.535 3.708l-4.258 4.26a3.124 3.124 0 0 1-5.092-1.012A3.098 3.098 0 0 1 8.879 11c0-.835.324-1.619.914-2.208l4.5-4.501a1 1 0 1 1 1.414 1.414l-4.5 4.501a1.112 1.112 0 0 0-.328.794A1.114 1.114 0 0 0 12 12.12c.297 0 .582-.118.793-.327l4.258-4.26A3.223 3.223 0 0 0 18 5.24c0-.866-.337-1.681-.949-2.293a3.248 3.248 0 0 0-4.586 0L2.95 12.465A3.224 3.224 0 0 0 2 14.76c0 .866.338 1.68.95 2.293a3.248 3.248 0 0 0 4.586 0l1.757-1.758a1 1 0 1 1 1.414 1.414L8.95 18.467A5.236 5.236 0 0 1 5.243 20z"></path>
</svg></span></button></span><span class="Polaris-VisuallyHidden_yrtt5"><input type="file" multiple="" tabindex="-1"></span>
</div>
<div class="_14594">
<div class="Polaris-ButtonGroup_yy85z">
<div class="Polaris-ButtonGroup__Item_yiyol"><button class="Polaris-Button_r99lw Polaris-Button--newDesignLanguage_1rik8 Polaris-Button--primary_7k9zs Polaris-Button--disabled_hcuh9" type="button" disabled=""><span class="Polaris-Button__Content_xd1mk"><span class="Polaris-Button__Text_yj3uv">Post</span></span></button></div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="GQL4J">
<div class="_2AMGd">
<div class="_1Dy_7">
<div class="_3JpYM mK7Dg">
<h3 aria-label="Yesterday" class="Polaris-Subheading_syouu">Yesterday</h3>
</div>
<ul class="_1A02w">
<li class="_2uqdv">
<div class="qUtBd _3ohI1">
<div class="pUfF9">
<div class="_1WAyL"></div>
<p class="_2f2zg">This order was archived.</p>
<p class="_3NuG1">6:27 AM</p>
</div>
</div>
</li>
<li class="_2uqdv">
<div class="_3Gh76">
<div class="bBN3t _3UEGX">
<div class="pcrSk _2UaKP"></div>
<div class="_1SlAd"><button class="_1r-F9" type="button"><span class="">You fulfilled 2 items from d-326 sector 63.</span>
<div class="_1oXo0 _182xi"><span class="Polaris-Icon_yj27d Polaris-Icon--colorBase_nqlaq Polaris-Icon--isColored_uhqnf Polaris-Icon--newDesignLanguage_1rik8"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
<path d="M5 8l5 5 5-5H5z"></path>
</svg></span></div>
</button>
<p class="_3X8e9">6:27 AM</p>
</div>
</div>
</div>
</li>
<li class="_2uqdv">
<div class="_3Gh76">
<div class="bBN3t _3UEGX">
<div class="pcrSk _2UaKP"></div>
<div class="_1SlAd"><button class="_1r-F9" type="button"><span class="">You canceled fulfillment via Manual for 2 items.</span>
<div class="_1oXo0 _182xi"><span class="Polaris-Icon_yj27d Polaris-Icon--colorBase_nqlaq Polaris-Icon--isColored_uhqnf Polaris-Icon--newDesignLanguage_1rik8"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
<path d="M5 8l5 5 5-5H5z"></path>
</svg></span></div>
</button>
<p class="_3X8e9">6:26 AM</p>
</div>
</div>
</div>
</li>
<li class="_2uqdv">
<div class="qUtBd _3ohI1">
<div class="pUfF9">
<div class="_1WAyL _2253w"></div>
<p class="_2f2zg">Order created at <?php echo date("F j, Y, g:i a", strtotime($order->created_at));  ?></p>
<p class="_3NuG1">6:26 AM</p>
</div>
</div>
</li>
</ul>
</div>
</div>


</div>
</div>
<div class="_1OP6w"></div>
</div>
<div class="_3lXCK">
<div class="_2PZHX Rb_fs">
<div class="Polaris-Card_yis1o Polaris-Card--newDesignLanguage_1rik8">
<div class="Polaris-Card__Header_z4uwg">
<div class="Polaris-Stack_32wu2 Polaris-Stack--alignmentBaseline_aupj5">
<div class="Polaris-Stack__Item_yiyol Polaris-Stack__Item--fill_vpuzt">
<h2 class="Polaris-Heading_1brcv">Notes</h2>
</div>
<div class="Polaris-Stack__Item_yiyol">
<div class="Polaris-ButtonGroup_yy85z">
<div class="Polaris-ButtonGroup__Item_yiyol Polaris-ButtonGroup__Item--plain_1lavi"><button class="Polaris-Button_r99lw Polaris-Button--newDesignLanguage_1rik8 Polaris-Button--plain_2z97r" type="button" onclick="Display_Call()"><span class="Polaris-Button__Content_xd1mk"><span class="Polaris-Button__Text_yj3uv">Edit</span></span></button></div>
</div>
</div>
</div>
</div>
<div class="Polaris-Card__Section_1b1h1">
<div class="zlQnq"><span class="Polaris-TextStyle--variationSubdued_1segu">@if (!$detail->notes)
    No notes from customer
@else {{$detail->notes}} @endif</span></div>
</div>
</div>
</div>
<div class="Polaris-Card_yis1o Polaris-Card--newDesignLanguage_1rik8">
<div class="Polaris-Card__Header_z4uwg">
<h2 class="Polaris-Heading_1brcv">Customer</h2>
</div>
<div>
<div class="Polaris-Card__Section_1b1h1"><span class="Polaris-TextStyle--variationSubdued_1segu">{{$customer->name}}</span></div>
<div class="Polaris-Card__Section_1b1h1">
<div class="Polaris-Card__SectionHeader_1aytf">
<div class="Polaris-Stack_32wu2 Polaris-Stack--alignmentBaseline_aupj5">
<div class="Polaris-Stack__Item_yiyol Polaris-Stack__Item--fill_vpuzt">
<h3 aria-label="Contact information" class="Polaris-Subheading_syouu">Contact information</h3>
</div>
<div class="Polaris-Stack__Item_yiyol">
<div class="Polaris-ButtonGroup_yy85z">
<div class="Polaris-ButtonGroup__Item_yiyol Polaris-ButtonGroup__Item--plain_1lavi"><button class="Polaris-Button_r99lw Polaris-Button--newDesignLanguage_1rik8 Polaris-Button--plain_2z97r" type="button"><span class="Polaris-Button__Content_xd1mk" onclick="Display_Contact()"><span class="Polaris-Button__Text_yj3uv">Edit</span></span></button></div>
</div>
</div>
</div>
</div>
<div class="Polaris-Stack_32wu2 Polaris-Stack--noWrap_vecks">
<div class="Polaris-Stack__Item_yiyol Polaris-Stack__Item--fill_vpuzt">
<div class="Polaris-TextContainer_szg8b Polaris-TextContainer--spacingTight_1o4d6">
<p><button type="button" class="Polaris-Link_yj5sy">{{$detail->email}}</button></p>
</div>
</div>
<div class="Polaris-Stack__Item_yiyol"><span>
<div class="_35TBa"><button class="Polaris-Button_r99lw Polaris-Button--newDesignLanguage_1rik8 Polaris-Button--plain_2z97r Polaris-Button--iconOnly_viazp" type="button" tabindex="0" aria-describedby="PolarisTooltipContent24"><span class="Polaris-Button__Content_xd1mk"><span class="Polaris-Button__Icon_yj27d"><span class="Polaris-Icon_yj27d Polaris-Icon--newDesignLanguage_1rik8"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
<path d="M15 2a1 1 0 0 1 1 1v13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 4 16.5V3a1 1 0 1 1 2 0v1a2 2 0 0 0 2 2h4a2 2 0 0 0 2-2V3a1 1 0 0 1 1-1zm-4 2H9a1 1 0 1 1 0-2h2a1 1 0 1 1 0 2z"></path>
</svg></span></span></span></button></div>
</span></div>
</div>
</div>
<div class="Polaris-Card__Section_1b1h1">
<div class="Polaris-Card__SectionHeader_1aytf">
<div class="Polaris-Stack_32wu2 Polaris-Stack--alignmentBaseline_aupj5">
<div class="Polaris-Stack__Item_yiyol Polaris-Stack__Item--fill_vpuzt">
<h3 aria-label="Shipping address" class="Polaris-Subheading_syouu">Shipping address</h3>
</div>
<div class="Polaris-Stack__Item_yiyol">
<div class="Polaris-ButtonGroup_yy85z">
<div class="Polaris-ButtonGroup__Item_yiyol Polaris-ButtonGroup__Item--plain_1lavi"><button onclick="Display_Shipping()" class="Polaris-Button_r99lw Polaris-Button--newDesignLanguage_1rik8 Polaris-Button--plain_2z97r" type="button"><span class="Polaris-Button__Content_xd1mk"><span class="Polaris-Button__Text_yj3uv">Edit</span></span></button></div>
</div>
</div>
</div>
</div>
<div class="Polaris-Stack_32wu2 Polaris-Stack--vertical_uiuuj Polaris-Stack--spacingTight_1o4d6">
<div class="Polaris-Stack__Item_yiyol">
<div class="Polaris-Stack_32wu2 Polaris-Stack--noWrap_vecks">
<div class="Polaris-Stack__Item_yiyol Polaris-Stack__Item--fill_vpuzt">
<div class="Polaris-TextContainer_szg8b Polaris-TextContainer--spacingTight_1o4d6">
<p>{{$detail->address}}, {{$detail->district}}, {{$detail->city}}, {{$detail->country}}<br><span>{{$detail->phone}}</span></p>
</div>
</div>
<div class="Polaris-Stack__Item_yiyol"><span>
<div class="D-y-V"><button class="Polaris-Button_r99lw Polaris-Button--newDesignLanguage_1rik8 Polaris-Button--plain_2z97r Polaris-Button--iconOnly_viazp" type="button" tabindex="0" aria-describedby="PolarisTooltipContent25"><span class="Polaris-Button__Content_xd1mk"><span class="Polaris-Button__Icon_yj27d"><span class="Polaris-Icon_yj27d Polaris-Icon--newDesignLanguage_1rik8"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
<path d="M15 2a1 1 0 0 1 1 1v13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 4 16.5V3a1 1 0 1 1 2 0v1a2 2 0 0 0 2 2h4a2 2 0 0 0 2-2V3a1 1 0 0 1 1-1zm-4 2H9a1 1 0 1 1 0-2h2a1 1 0 1 1 0 2z"></path>
</svg></span></span></span></button></div>
</span></div>
</div>
</div>
</div>
</div>

</div>
</div>

<div class="_2O_bg">
<div>
<div class="Polaris-Card_yis1o Polaris-Card--subdued_17vaa Polaris-Card--newDesignLanguage_1rik8">
<div class="Polaris-Card__Header_z4uwg">
<div class="Polaris-Stack_32wu2 Polaris-Stack--alignmentBaseline_aupj5">
<div class="Polaris-Stack__Item_yiyol Polaris-Stack__Item--fill_vpuzt">
<h2 class="Polaris-Heading_1brcv">Tags</h2>
</div>
<div class="Polaris-Stack__Item_yiyol">
<div class="Polaris-ButtonGroup_yy85z">
</div>
</div>
</div>
</div>
<div class="Polaris-Card__Section_1b1h1">
<div>
<div role="combobox" aria-expanded="false" aria-owns="PolarisComboBox1" aria-controls="PolarisComboBox1" aria-haspopup="true" tabindex="0">
<div>
<div class="Polaris-Labelled--hidden_riqie">
<div class="Polaris-Labelled__LabelWrapper_bf6ys">
<div class="Polaris-Label_2vd36"><label id="PolarisTextField5Label" for="PolarisTextField5" class="Polaris-Label__Text_yj3uv">Add tags</label></div>
</div>
<div class="Polaris-Connected_wopc9 Polaris-Connected--newDesignLanguage_1rik8">
<div class="Polaris-Connected__Item_yiyol Polaris-Connected__Item--primary_rmh5m">
<div class="Polaris-TextField_1spwi Polaris-TextField--newDesignLanguage_1rik8"><input id="PolarisTextField5" placeholder="reviewed, packed, delivered" autocomplete="off" class="Polaris-TextField__Input_30ock" aria-labelledby="PolarisTextField5Label" aria-invalid="false" aria-autocomplete="list" aria-multiline="false" value="" tabindex="0" aria-controls="Polarispopover84" aria-owns="Polarispopover84" aria-expanded="false">
<div class="Polaris-TextField__Backdrop_1x2i2"></div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="_2zo22 Rb_fs">
<div class="Polaris-PageActions_fcnua">
<div class="Polaris-Stack_32wu2 Polaris-Stack--spacingTight_1o4d6 Polaris-Stack--distributionEqualSpacing_x9cqm">
<div class="Polaris-Stack__Item_yiyol">
<div class="Polaris-ButtonGroup_yy85z">
<div class="Polaris-ButtonGroup__Item_yiyol"><button class="Polaris-Button_r99lw Polaris-Button--newDesignLanguage_1rik8 Polaris-Button--outline_1urzi Polaris-Button--destructive_zy6o5" type="button"><span class="Polaris-Button__Content_xd1mk"><span class="Polaris-Button__Text_yj3uv">Delete order</span></span></button></div>
</div>
</div>
</div>
</div>
</div>
</section>
</div>
</div>
</div>
</div>
</main>
</div>
</div><noscript>
<div class="MsTle">
<div class="_3pUpo">
<div class="Polaris-EmptyState_z7e24 Polaris-EmptyState--newDesignLanguage_1rik8 Polaris-EmptyState--withinPage_kguwn">
<div class="Polaris-EmptyState__Section_1b1h1">
<div class="Polaris-EmptyState__DetailsContainer_1a2i4">
<div class="Polaris-EmptyState__Details_1bdkj">
<div class="Polaris-TextContainer_szg8b">
<p class="Polaris-DisplayText_1u0t8 Polaris-DisplayText--sizeMedium_5f35p">Turn on JavaScript to use Shopify</p>
<div class="Polaris-EmptyState__Content_xd1mk">
<p>Shopify requires a modern browser with JavaScript enabled to run.</p>
<p>If JavaScript is disabled, enable it and refresh this page. If you have an older browser, upgrade to the latest version of Chrome, Safari, Firefox, or Edge.</p>
</div>
</div>
<div class="Polaris-EmptyState__Actions_17m67">
<div class="Polaris-Stack_32wu2 Polaris-Stack--spacingTight_1o4d6 Polaris-Stack--distributionCenter_60gbr Polaris-Stack--alignmentCenter_1rtaw">
<div class="Polaris-Stack__Item_yiyol"><a data-polaris-unstyled="true" class="Polaris-Button_r99lw Polaris-Button--newDesignLanguage_1rik8 Polaris-Button--primary_7k9zs" href="/admin"><span class="Polaris-Button__Content_xd1mk"><span class="Polaris-Button__Text_yj3uv">Refresh</span></span></a></div>
<div class="Polaris-Stack__Item_yiyol"><a target="_blank" href="http://www.enable-javascript.com/" rel="noopener noreferrer" data-polaris-unstyled="true" class="Polaris-Button_r99lw Polaris-Button--newDesignLanguage_1rik8"><span class="Polaris-Button__Content_xd1mk"><span class="Polaris-Button__Text_yj3uv">Learn more</span></span></a></div>
</div>
</div>
</div>
</div>
<div class="Polaris-EmptyState__ImageContainer_wrfol"><img src="https://cdn.shopify.com/shopifycloud/web/assets/v1/0644709e236fe1843b04f44e62f7c4f2.svg" srcSet="https://cdn.shopify.com/shopifycloud/web/assets/v1/0644709e236fe1843b04f44e62f7c4f2.svg 568w,https://cdn.shopify.com/shopifycloud/web/assets/v1/0644709e236fe1843b04f44e62f7c4f2.svg 1136w" alt="" role="presentation" class="Polaris-EmptyState__Image_2qgms" sizes="(max-width: 568px) 60vw" /></div>
</div>
</div>
</div>
</div>
</noscript>
<div id="PolarisPortalsContainer">
<div data-portal-id="popover-Polarisportal3"></div>
<div data-portal-id="modal-Polarisportal1">
<div></div>
</div>
<div data-portal-id="Polarisportal2">
<div class="Polaris-Frame-ToastManager_1utvc" aria-live="polite"></div>
</div>
<div data-portal-id="popover-Polarisportal9"></div>
<div data-portal-id="popover-Polarisportal10"></div>
<div data-portal-id="modal-Polarisportal115">
<div></div>
</div>
<div data-portal-id="modal-Polarisportal116">
<div></div>
</div>
<div data-portal-id="modal-Polarisportal117">
<div></div>
</div>
<div data-portal-id="modal-Polarisportal118">
<div></div>
</div>
<div data-portal-id="modal-Polarisportal119">
<div></div>
</div>
<div data-portal-id="modal-Polarisportal120">
<div></div>
</div>
<div data-portal-id="modal-Polarisportal121">
<div></div>
</div>
<div data-portal-id="modal-Polarisportal122">
<div></div>
</div>
<div data-portal-id="popover-Polarisportal125"></div>
<div data-portal-id="tooltip-Polarisportal126"></div>
<div data-portal-id="tooltip-Polarisportal127"></div>
<div data-portal-id="modal-Polarisportal128">
<div></div>
</div>
<div data-portal-id="popover-Polarisportal129"></div>
<div data-portal-id="modal-Polarisportal143">
<div></div>
</div>
<div data-portal-id="tooltip-Polarisportal165"></div>
<div data-portal-id="popover-Polarisportal166"></div>
<div data-portal-id="tooltip-Polarisportal167"></div>
<div data-portal-id="popover-Polarisportal168"></div>
<div data-portal-id="tooltip-Polarisportal169"></div>
<div data-portal-id="popover-Polarisportal170"></div>
<div data-portal-id="popover-Polarisportal171"></div>
<div data-portal-id="tooltip-Polarisportal172"></div>
<div data-portal-id="popover-Polarisportal173"></div>
<div data-portal-id="popover-Polarisportal179"></div>
</div>
</div>
</div>
<!--Notes Editor-->

<div id="PolarisPortalsContainer-for-Add-Notes" style="visibility: hidden;">
    <div data-portal-id="popover-Polarisportal3"></div>
    <div data-portal-id="modal-Polarisportal1">
        <div></div>
    </div>
    <div data-portal-id="Polarisportal2">
        <div class="Polaris-Frame-ToastManager_1utvc" aria-live="polite"></div>
    </div>
    <div data-portal-id="popover-Polarisportal8"></div>
    <div data-portal-id="popover-Polarisportal9"></div>
    <div data-portal-id="modal-Polarisportal113">
        <div></div>
    </div>
    <div data-portal-id="modal-Polarisportal114">
        <div>
            <div class="Polaris-Modal-Dialog__Container_13mbo" data-polaris-layer="true" data-polaris-overlay="true">
                <div>
                    <div role="dialog" aria-labelledby="Polarismodal-header11" tabindex="-1" class="Polaris-Modal-Dialog_n3qgo">
                        <div class="Polaris-Modal-Dialog__Modal_2v9yc">
                            <div class="Polaris-Modal-Header_z4uwg">
                                <div id="Polarismodal-header11" class="Polaris-Modal-Header__Title_2qj8j">
                                    <h2 class="Polaris-DisplayText_1u0t8 Polaris-DisplayText--sizeSmall_7647q">Add note</h2>
                                </div><button class="Polaris-Modal-CloseButton_bl13t" aria-label="Close" onclick="Close_Call()"><span class="Polaris-Icon_yj27d Polaris-Icon--colorInkLighter_2s08r Polaris-Icon--isColored_uhqnf Polaris-Icon--newDesignLanguage_1rik8"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                                            <path d="M11.414 10l6.293-6.293a1 1 0 1 0-1.414-1.414L10 8.586 3.707 2.293a1 1 0 0 0-1.414 1.414L8.586 10l-6.293 6.293a1 1 0 1 0 1.414 1.414L10 11.414l6.293 6.293A.998.998 0 0 0 18 17a.999.999 0 0 0-.293-.707L11.414 10z"></path>
                                        </svg></span></button>

                            </div>
                            <div class="Polaris-Modal__BodyWrapper_1kb1f">
                                <div class="Polaris-Modal__Body_yjdx1 Polaris-Scrollable_1ed9o Polaris-Scrollable--vertical_uiuuj" data-polaris-scrollable="true">
                                    <section class="Polaris-Modal-Section_1b1h1">
                                        <div class="Polaris-TextContainer_szg8b">
                                            <div class="">
                                                <div class="Polaris-Labelled__LabelWrapper_bf6ys">
                                                    <div class="Polaris-Label_2vd36"><label id="PolarisTextField7Label" for="PolarisTextField7" class="Polaris-Label__Text_yj3uv">Notes</label></div>
                                                </div>
                                                <div class="Polaris-Connected_wopc9 Polaris-Connected--newDesignLanguage_1rik8">
                                                    <div class="Polaris-Connected__Item_yiyol Polaris-Connected__Item--primary_rmh5m">
                                                        <div class="Polaris-TextField_1spwi Polaris-TextField--multiline_1jgfe Polaris-TextField--newDesignLanguage_1rik8"><textarea id="PolarisTextField7" class="Polaris-TextField__Input_30ock" maxlength="5000" aria-labelledby="PolarisTextField7Label" aria-invalid="false" aria-multiline="true" style="height: 36px;"></textarea>
                                                            <div class="Polaris-TextField__Backdrop_1x2i2"></div>
                                                            <div aria-hidden="true" class="Polaris-TextField__Resizer_mlqsu">
                                                                <div class="Polaris-TextField__DummyInput_1u3lq"><br></div>
                                                                <div class="Polaris-TextField__DummyInput_1u3lq"><br></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <p>To comment on an order or mention a staff member, use <a target="_blank" href="https://help.shopify.com/en/manual/productivity-tools/timeline" rel="noopener noreferrer" data-polaris-unstyled="true" class="Polaris-Link_yj5sy">Timeline<span class="Polaris-Link__IconLockup_i2iua"><span class="Polaris-Link__IconLayout_1wnv2"><span class="Polaris-Icon_yj27d Polaris-Icon--newDesignLanguage_1rik8" aria-label="(opens a new window)"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                                                                    <path d="M14 13v1a1 1 0 0 1-1 1H6c-.575 0-1-.484-1-1V7a1 1 0 0 1 1-1h1c1.037 0 1.04 1.5 0 1.5-.178.005-.353 0-.5 0v6h6V13c0-1 1.5-1 1.5 0zm-3.75-7.25A.75.75 0 0 1 11 5h4v4a.75.75 0 0 1-1.5 0V7.56l-3.22 3.22a.75.75 0 1 1-1.06-1.06l3.22-3.22H11a.75.75 0 0 1-.75-.75z"></path>
                                                                </svg></span></span></span></a> instead.</p>

                                        </div>
                                    </section>
                                </div>
                            </div>
                            <div class="Polaris-Modal-Footer_z4ij5">
                                <div class="Polaris-Modal-Footer__FooterContent_pymp5">
                                    <div class="Polaris-Stack_32wu2 Polaris-Stack--alignmentCenter_1rtaw">
                                        <div class="Polaris-Stack__Item_yiyol Polaris-Stack__Item--fill_vpuzt"></div>
                                        <div class="Polaris-Stack__Item_yiyol">
                                            <div class="Polaris-ButtonGroup_yy85z">
                                                <div class="Polaris-ButtonGroup__Item_yiyol"><button class="Polaris-Button_r99lw Polaris-Button--newDesignLanguage_1rik8" type="button" onclick="Close_Call()"><span class="Polaris-Button__Content_xd1mk"><span class="Polaris-Button__Text_yj3uv">Cancel</span></span></button></div>
                                                <div class="Polaris-ButtonGroup__Item_yiyol"><button class="Polaris-Button_r99lw Polaris-Button--newDesignLanguage_1rik8 Polaris-Button--primary_7k9zs" type="button" onclick="Close_Call();"><span class="Polaris-Button__Content_xd1mk"><span class="Polaris-Button__Text_yj3uv">Save</span></span></button></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="Polaris-Backdrop_1x2i2"></div>
    </div>
    <div data-portal-id="modal-Polarisportal115">
        <div></div>
    </div>
    <div data-portal-id="modal-Polarisportal116">
        <div></div>
    </div>
    <div data-portal-id="modal-Polarisportal117">
        <div></div>
    </div>
    <div data-portal-id="modal-Polarisportal118">
        <div></div>
    </div>
    <div data-portal-id="modal-Polarisportal119">
        <div></div>
    </div>
    <div data-portal-id="modal-Polarisportal120">
        <div></div>
    </div>
    <div data-portal-id="popover-Polarisportal123"></div>
    <div data-portal-id="popover-Polarisportal124"></div>
    <div data-portal-id="modal-Polarisportal125">
        <div></div>
    </div>
    <div data-portal-id="popover-Polarisportal127"></div>
    <div data-portal-id="modal-Polarisportal128">
        <div></div>
    </div>
    <div data-portal-id="tooltip-Polarisportal129"></div>
    <div data-portal-id="popover-Polarisportal130"></div>
    <div data-portal-id="tooltip-Polarisportal131"></div>
    <div data-portal-id="popover-Polarisportal132"></div>
    <div data-portal-id="tooltip-Polarisportal133"></div>
    <div data-portal-id="popover-Polarisportal134"></div>
    <div data-portal-id="popover-Polarisportal135"></div>
    <div data-portal-id="tooltip-Polarisportal136"></div>
    <div data-portal-id="popover-Polarisportal137"></div>
    <div data-portal-id="popover-Polarisportal138"></div>
</div>

<!--Notes Editor-->


<!--Contact Editor-->

<div id="PolarisPortalsContainer_for_Contact" style="visibility: hidden;">
    <div data-portal-id="popover-Polarisportal3"></div>
    <div data-portal-id="modal-Polarisportal1">
        <div></div>
    </div>
    <div data-portal-id="Polarisportal2">
        <div class="Polaris-Frame-ToastManager_1utvc" aria-live="polite"></div>
    </div>
    <div data-portal-id="popover-Polarisportal8"></div>
    <div data-portal-id="popover-Polarisportal9"></div>
    <div data-portal-id="modal-Polarisportal113">
        <div></div>
    </div>
    <div data-portal-id="modal-Polarisportal114">
        <div></div>
    </div>
    <div data-portal-id="modal-Polarisportal115">
        <div></div>
    </div>
    <div data-portal-id="modal-Polarisportal116">
        <div></div>
    </div>
    <div data-portal-id="modal-Polarisportal117">
        <div></div>
    </div>
    <div data-portal-id="modal-Polarisportal118">
        <div></div>
    </div>
    <div data-portal-id="modal-Polarisportal119">
        <div></div>
    </div>
    <div data-portal-id="modal-Polarisportal120">
        <div></div>
    </div>
    <div data-portal-id="popover-Polarisportal123"></div>
    <div data-portal-id="popover-Polarisportal124"></div>
    <div data-portal-id="modal-Polarisportal125">
        <div></div>
    </div>
    <div data-portal-id="popover-Polarisportal127"></div>
    <div data-portal-id="modal-Polarisportal128">
        <div></div>
    </div>
    <div data-portal-id="tooltip-Polarisportal129"></div>
    <div data-portal-id="popover-Polarisportal130"></div>
    <div data-portal-id="tooltip-Polarisportal131"></div>
    <div data-portal-id="popover-Polarisportal132"></div>
    <div data-portal-id="tooltip-Polarisportal133"></div>
    <div data-portal-id="popover-Polarisportal134"></div>
    <div data-portal-id="popover-Polarisportal135"></div>
    <div data-portal-id="tooltip-Polarisportal136"></div>
    <div data-portal-id="popover-Polarisportal137"></div>
    <div data-portal-id="modal-Polarisportal142">
        <div>
            <div class="Polaris-Modal-Dialog__Container_13mbo" data-polaris-layer="true" data-polaris-overlay="true">
                <div>
                    <div role="dialog" aria-labelledby="Polarismodal-header20" tabindex="-1" class="Polaris-Modal-Dialog_n3qgo">
                        <div class="Polaris-Modal-Dialog__Modal_2v9yc">
                            <div class="Polaris-Modal-Header_z4uwg">
                                <div id="Polarismodal-header20" class="Polaris-Modal-Header__Title_2qj8j">
                                    <h2 class="Polaris-DisplayText_1u0t8 Polaris-DisplayText--sizeSmall_7647q">Edit contact information</h2>
                                </div><button class="Polaris-Modal-CloseButton_bl13t" aria-label="Close" onclick="Close_Contact()"><span class="Polaris-Icon_yj27d Polaris-Icon--colorInkLighter_2s08r Polaris-Icon--isColored_uhqnf Polaris-Icon--newDesignLanguage_1rik8"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                                            <path d="M11.414 10l6.293-6.293a1 1 0 1 0-1.414-1.414L10 8.586 3.707 2.293a1 1 0 0 0-1.414 1.414L8.586 10l-6.293 6.293a1 1 0 1 0 1.414 1.414L10 11.414l6.293 6.293A.998.998 0 0 0 18 17a.999.999 0 0 0-.293-.707L11.414 10z"></path>
                                        </svg></span></button>
                            </div>
                            <div class="Polaris-Modal__BodyWrapper_1kb1f">
                                <div class="Polaris-Modal__Body_yjdx1 Polaris-Scrollable_1ed9o Polaris-Scrollable--vertical_uiuuj" data-polaris-scrollable="true">
                                    <section class="Polaris-Modal-Section_1b1h1">
                                        <div class="Polaris-FormLayout_1wntl">
                                            <div class="Polaris-FormLayout__Item_yiyol">
                                                <div class="">
                                                    <div class="Polaris-Labelled__LabelWrapper_bf6ys">
                                                        <div class="Polaris-Label_2vd36"><label id="PolarisTextField16Label" for="PolarisTextField16" class="Polaris-Label__Text_yj3uv">Email</label></div>
                                                    </div>
                                                    <div class="Polaris-Connected_wopc9 Polaris-Connected--newDesignLanguage_1rik8">
                                                        <div class="Polaris-Connected__Item_yiyol Polaris-Connected__Item--primary_rmh5m">
                                                            <div class="Polaris-TextField_1spwi Polaris-TextField--newDesignLanguage_1rik8"><input id="PolarisTextField16" style="border: 1px solid #DFE3E8;border-radius: 0.2rem;" class="Polaris-TextField__Input_30ock" type="email" aria-labelledby="PolarisTextField16Label" aria-invalid="false" aria-multiline="false" value="">
                                                                <div class="Polaris-TextField__Backdrop_1x2i2"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                            <div class="Polaris-Modal-Footer_z4ij5">
                                <div class="Polaris-Modal-Footer__FooterContent_pymp5">
                                    <div class="Polaris-Stack_32wu2 Polaris-Stack--alignmentCenter_1rtaw">
                                        <div class="Polaris-Stack__Item_yiyol Polaris-Stack__Item--fill_vpuzt"></div>
                                        <div class="Polaris-Stack__Item_yiyol">
                                            <div class="Polaris-ButtonGroup_yy85z">
                                                <div class="Polaris-ButtonGroup__Item_yiyol"><button class="Polaris-Button_r99lw Polaris-Button--newDesignLanguage_1rik8" type="button" onclick="Close_Contact()"><span class="Polaris-Button__Content_xd1mk"><span class="Polaris-Button__Text_yj3uv">Cancel</span></span></button></div>
                                                <div class="Polaris-ButtonGroup__Item_yiyol"><button class="Polaris-Button_r99lw Polaris-Button--newDesignLanguage_1rik8 Polaris-Button--primary_7k9zs Polaris-Button--disabled_hcuh9" type="button" disabled="" onclick="Close_Contact()"><span class="Polaris-Button__Content_xd1mk"><span class="Polaris-Button__Text_yj3uv">Save</span></span></button></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="Polaris-Backdrop_1x2i2"></div>
    </div>
    <div data-portal-id="popover-Polarisportal145"></div>
</div>
<!--Contact Editor-->
<!--Shipping Editor-->
<div id="PolarisPortalsContainer-Shipping" style="visibility: hidden;">
    <div data-portal-id="popover-Polarisportal3"></div>
    <div data-portal-id="modal-Polarisportal4">
        <div></div>
    </div>
    <div data-portal-id="modal-Polarisportal5">
        <div></div>
    </div>
    <div data-portal-id="modal-Polarisportal6">
        <div></div>
    </div>
    <div data-portal-id="modal-Polarisportal7">
        <div>
            <div class="Polaris-Modal-Dialog__Container_13mbo" data-polaris-layer="true" data-polaris-overlay="true">
                <div>
                    <div role="dialog" aria-labelledby="Polarismodal-header5" tabindex="-1" class="Polaris-Modal-Dialog_n3qgo">
                        <div class="Polaris-Modal-Dialog__Modal_2v9yc">
                            <div class="Polaris-Modal-Header_z4uwg">
                                <div id="Polarismodal-header5" class="Polaris-Modal-Header__Title_2qj8j">
                                    <h2 class="Polaris-DisplayText_1u0t8 Polaris-DisplayText--sizeSmall_7647q">Edit shipping address</h2>
                                </div><button class="Polaris-Modal-CloseButton_bl13t" aria-label="Close" onclick="Close_Shipping()"><span class="Polaris-Icon_yj27d Polaris-Icon--colorInkLighter_2s08r Polaris-Icon--isColored_uhqnf Polaris-Icon--newDesignLanguage_1rik8"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                                            <path d="M11.414 10l6.293-6.293a1 1 0 1 0-1.414-1.414L10 8.586 3.707 2.293a1 1 0 0 0-1.414 1.414L8.586 10l-6.293 6.293a1 1 0 1 0 1.414 1.414L10 11.414l6.293 6.293A.998.998 0 0 0 18 17a.999.999 0 0 0-.293-.707L11.414 10z"></path>
                                        </svg></span></button>
                            </div>
                            <div class="Polaris-Modal__BodyWrapper_1kb1f">
                                <div class="Polaris-Modal__Body_yjdx1 Polaris-Scrollable_1ed9o Polaris-Scrollable--vertical_uiuuj Polaris-Scrollable--hasBottomShadow_all2n Polaris-Scrollable--verticalHasScrolling_1n2r8" data-polaris-scrollable="true">
                                    <section class="Polaris-Modal-Section_1b1h1">
                                        <form method="post">
                                            <div class="Polaris-FormLayout_1wntl">
                                                <div class="Polaris-FormLayout__Item_yiyol">
                                                    <div class="Polaris-FormLayout_1wntl">
                                                        <div role="group" class="Polaris-FormLayout--condensed_b60cb">
                                                            <div class="Polaris-FormLayout__Items_38lvu">
                                                                <div class="Polaris-FormLayout__Item_yiyol">
                                                                    <div class="Polaris-FormLayout_1wntl">
                                                                        <div role="group" class="Polaris-FormLayout--grouped_17srt">
                                                                            <div class="Polaris-FormLayout__Items_38lvu">
                                                                                <div class="Polaris-FormLayout__Item_yiyol">
                                                                                    <div class="">
                                                                                        <div class="Polaris-Labelled__LabelWrapper_bf6ys">
                                                                                            <div class="Polaris-Label_2vd36"><label id="PolarisTextField2Label" for="PolarisTextField2" class="Polaris-Label__Text_yj3uv">First name</label></div>
                                                                                        </div>
                                                                                        <div class="Polaris-Connected_wopc9 Polaris-Connected--newDesignLanguage_1rik8">
                                                                                            <div class="Polaris-Connected__Item_yiyol Polaris-Connected__Item--primary_rmh5m">
                                                                                                <div class="Polaris-TextField_1spwi Polaris-TextField--newDesignLanguage_1rik8"><input name="firstName" id="PolarisTextField2" class="Polaris-TextField__Input_30ock" aria-labelledby="PolarisTextField2Label" aria-invalid="false" aria-multiline="false" value="">
                                                                                                    <div class="Polaris-TextField__Backdrop_1x2i2"></div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="Polaris-FormLayout__Item_yiyol">
                                                                                    <div class="">
                                                                                        <div class="Polaris-Labelled__LabelWrapper_bf6ys">
                                                                                            <div class="Polaris-Label_2vd36"><label id="PolarisTextField3Label" for="PolarisTextField3" class="Polaris-Label__Text_yj3uv">Last name</label></div>
                                                                                        </div>
                                                                                        <div class="Polaris-Connected_wopc9 Polaris-Connected--newDesignLanguage_1rik8">
                                                                                            <div class="Polaris-Connected__Item_yiyol Polaris-Connected__Item--primary_rmh5m">
                                                                                                <div class="Polaris-TextField_1spwi Polaris-TextField--newDesignLanguage_1rik8"><input name="lastName" id="PolarisTextField3" class="Polaris-TextField__Input_30ock" aria-labelledby="PolarisTextField3Label" aria-invalid="false" aria-multiline="false" value="">
                                                                                                    <div class="Polaris-TextField__Backdrop_1x2i2"></div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="Polaris-FormLayout__Item_yiyol">
                                                    <div class="Polaris-FormLayout_1wntl">
                                                        <div role="group" class="Polaris-FormLayout--condensed_b60cb">
                                                            <div class="Polaris-FormLayout__Items_38lvu">
                                                                <div class="Polaris-FormLayout__Item_yiyol">
                                                                    <div class="">
                                                                        <div class="Polaris-Labelled__LabelWrapper_bf6ys">
                                                                            <div class="Polaris-Label_2vd36"><label id="PolarisTextField4Label" for="PolarisTextField4" class="Polaris-Label__Text_yj3uv">Company</label></div>
                                                                        </div>
                                                                        <div class="Polaris-Connected_wopc9 Polaris-Connected--newDesignLanguage_1rik8">
                                                                            <div class="Polaris-Connected__Item_yiyol Polaris-Connected__Item--primary_rmh5m">
                                                                                <div class="Polaris-TextField_1spwi Polaris-TextField--newDesignLanguage_1rik8"><input name="company" id="PolarisTextField4" class="Polaris-TextField__Input_30ock" aria-labelledby="PolarisTextField4Label" aria-invalid="false" aria-multiline="false" value="">
                                                                                    <div class="Polaris-TextField__Backdrop_1x2i2"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="Polaris-FormLayout__Item_yiyol">
                                                    <div class="Polaris-FormLayout_1wntl">
                                                        <div role="group" class="Polaris-FormLayout--condensed_b60cb">
                                                            <div class="Polaris-FormLayout__Items_38lvu">
                                                                <div class="Polaris-FormLayout__Item_yiyol">
                                                                    <div role="combobox" aria-expanded="false" aria-owns="PolarisComboBox2" aria-controls="PolarisComboBox2" aria-haspopup="true" tabindex="-1">
                                                                        <div>
                                                                            <div class="">
                                                                                <div class="Polaris-Labelled__LabelWrapper_bf6ys">
                                                                                    <div class="Polaris-Label_2vd36"><label id="PolarisTextField5Label" for="PolarisTextField5" class="Polaris-Label__Text_yj3uv">Address</label></div>
                                                                                </div>
                                                                                <div class="Polaris-Connected_wopc9 Polaris-Connected--newDesignLanguage_1rik8">
                                                                                    <div class="Polaris-Connected__Item_yiyol Polaris-Connected__Item--primary_rmh5m">
                                                                                        <div class="Polaris-TextField_1spwi Polaris-TextField--newDesignLanguage_1rik8"><input name="address1" id="PolarisTextField5" autocomplete="no" class="Polaris-TextField__Input_30ock" aria-labelledby="PolarisTextField5Label" aria-invalid="false" aria-multiline="false" value="" tabindex="0" aria-controls="Polarispopover12" aria-owns="Polarispopover12" aria-expanded="false">
                                                                                            <div class="Polaris-TextField__Backdrop_1x2i2"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="Polaris-FormLayout__Item_yiyol">
                                                    <div class="Polaris-FormLayout_1wntl">
                                                        <div role="group" class="Polaris-FormLayout--condensed_b60cb">
                                                            <div class="Polaris-FormLayout__Items_38lvu">
                                                                <div class="Polaris-FormLayout__Item_yiyol">
                                                                    <div class="">
                                                                        <div class="Polaris-Labelled__LabelWrapper_bf6ys">
                                                                            <div class="Polaris-Label_2vd36"><label id="PolarisTextField6Label" for="PolarisTextField6" class="Polaris-Label__Text_yj3uv">Apartment, suite, etc.</label></div>
                                                                        </div>
                                                                        <div class="Polaris-Connected_wopc9 Polaris-Connected--newDesignLanguage_1rik8">
                                                                            <div class="Polaris-Connected__Item_yiyol Polaris-Connected__Item--primary_rmh5m">
                                                                                <div class="Polaris-TextField_1spwi Polaris-TextField--newDesignLanguage_1rik8"><input name="address2" id="PolarisTextField6" class="Polaris-TextField__Input_30ock" aria-labelledby="PolarisTextField6Label" aria-invalid="false" aria-multiline="false" value="">
                                                                                    <div class="Polaris-TextField__Backdrop_1x2i2"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="Polaris-FormLayout__Item_yiyol">
                                                    <div class="Polaris-FormLayout_1wntl">
                                                        <div role="group" class="Polaris-FormLayout--condensed_b60cb">
                                                            <div class="Polaris-FormLayout__Items_38lvu">
                                                                <div class="Polaris-FormLayout__Item_yiyol">
                                                                    <div class="">
                                                                        <div class="Polaris-Labelled__LabelWrapper_bf6ys">
                                                                            <div class="Polaris-Label_2vd36"><label id="PolarisTextField7Label" for="PolarisTextField7" class="Polaris-Label__Text_yj3uv">City</label></div>
                                                                        </div>
                                                                        <div class="Polaris-Connected_wopc9 Polaris-Connected--newDesignLanguage_1rik8">
                                                                            <div class="Polaris-Connected__Item_yiyol Polaris-Connected__Item--primary_rmh5m">
                                                                                <div class="Polaris-TextField_1spwi Polaris-TextField--newDesignLanguage_1rik8"><input name="city" id="PolarisTextField7" class="Polaris-TextField__Input_30ock" aria-labelledby="PolarisTextField7Label" aria-invalid="false" aria-multiline="false" value="">
                                                                                    <div class="Polaris-TextField__Backdrop_1x2i2"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="Polaris-FormLayout_1wntl">
                                                <div class="Polaris-FormLayout__Item_yiyol">
                                                    <div class="Polaris-FormLayout_1wntl">
                                                        <div role="group" class="Polaris-FormLayout--condensed_b60cb">
                                                            <div class="Polaris-FormLayout__Items_38lvu">
                                                                <div class="Polaris-FormLayout__Item_yiyol">
                                                                    <div class="">
                                                                        <div class="Polaris-Labelled__LabelWrapper_bf6ys">
                                                                            <div class="Polaris-Label_2vd36"><label id="PolarisSelect1Label" for="PolarisSelect1" class="Polaris-Label__Text_yj3uv">Country/Region</label></div>
                                                                        </div>
                                                                        
                                                                        <div class="Polaris-Connected_wopc9 Polaris-Connected--newDesignLanguage_1rik8">
                                                                            <div class="Polaris-Connected__Item_yiyol Polaris-Connected__Item--primary_rmh5m">
                                                                                <div class="Polaris-TextField_1spwi Polaris-TextField--newDesignLanguage_1rik8"><input name="city" id="PolarisTextField7" class="Polaris-TextField__Input_30ock" aria-labelledby="PolarisTextField7Label" aria-invalid="false" aria-multiline="false" value="">
                                                                                    <div class="Polaris-TextField__Backdrop_1x2i2"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="Polaris-FormLayout_1wntl">
                                                <div class="Polaris-FormLayout__Item_yiyol">
                                                    <div class="Polaris-FormLayout_1wntl">
                                                        <div role="group" class="Polaris-FormLayout--condensed_b60cb">
                                                            <div class="Polaris-FormLayout__Items_38lvu">
                                                                <div class="Polaris-FormLayout__Item_yiyol">
                                                                    <div>
                                                                        <div class="">
                                                                            <div class="Polaris-Labelled__LabelWrapper_bf6ys">
                                                                                <div class="Polaris-Label_2vd36"><label id="PolarisTextField8Label" for="PolarisTextField8" class="Polaris-Label__Text_yj3uv">Phone</label></div>
                                                                            </div>
                                                                            <div class="Polaris-Connected_wopc9 Polaris-Connected--newDesignLanguage_1rik8">
                                                                                <div class="Polaris-Connected__Item_yiyol Polaris-Connected__Item--primary_rmh5m">
                                                                                    <div class="Polaris-TextField_1spwi Polaris-TextField--newDesignLanguage_1rik8"><input id="PolarisTextField8" placeholder="" class="Polaris-TextField__Input_30ock" aria-labelledby="PolarisTextField8Label" aria-invalid="false" aria-multiline="false" value="">
                                                                                        <div class="Polaris-TextField__Backdrop_1x2i2"></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><span class="Polaris-VisuallyHidden_yrtt5"><button type="submit" aria-hidden="true" tabindex="-1">Submit</button></span>
                                        </form>
                                    </section>
                                </div>
                            </div>
                            <div class="Polaris-Modal-Footer_z4ij5">
                                <div class="Polaris-Modal-Footer__FooterContent_pymp5">
                                    <div class="Polaris-Stack_32wu2 Polaris-Stack--alignmentCenter_1rtaw">
                                        <div class="Polaris-Stack__Item_yiyol Polaris-Stack__Item--fill_vpuzt"></div>
                                        <div class="Polaris-Stack__Item_yiyol">
                                            <div class="Polaris-ButtonGroup_yy85z">
                                                <div class="Polaris-ButtonGroup__Item_yiyol"><button class="Polaris-Button_r99lw Polaris-Button--newDesignLanguage_1rik8" type="button" onclick="Close_Shipping()"><span class="Polaris-Button__Content_xd1mk"><span class="Polaris-Button__Text_yj3uv" >Cancel</span></span></button></div>
                                                <div class="Polaris-ButtonGroup__Item_yiyol"><button class="Polaris-Button_r99lw Polaris-Button--newDesignLanguage_1rik8 Polaris-Button--primary_7k9zs" type="button"onclick="Close_Shipping()"><span class="Polaris-Button__Content_xd1mk"><span class="Polaris-Button__Text_yj3uv">Save</span></span></button></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="Polaris-Backdrop_1x2i2"></div>
    </div>
    <div data-portal-id="modal-Polarisportal8">
        <div></div>
    </div>
    <div data-portal-id="modal-Polarisportal9">
        <div></div>
    </div>
    <div data-portal-id="modal-Polarisportal10">
        <div></div>
    </div>
    <div data-portal-id="modal-Polarisportal11">
        <div></div>
    </div>
    <div data-portal-id="modal-Polarisportal1">
        <div></div>
    </div>
    <div data-portal-id="Polarisportal2">
        <div class="Polaris-Frame-ToastManager_1utvc" aria-live="polite"></div>
    </div>
</div>
<!--Shipping Editor-->

@endsection