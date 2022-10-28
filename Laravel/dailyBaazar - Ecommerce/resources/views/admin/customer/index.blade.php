@extends('layouts.admin')
@section('title', 'Customers')
@section('content')

<link data-react-html="true" rel="mask-icon" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/e028fc80f1cd644ff3f327769b407fd9.svg" color="#000000">
    <link data-react-html="true" rel="shortcut icon" type="image/x-icon" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/favicon-default-0c50a58978abc08c03f89d0309d84583.ico">
    <link data-react-html="true" rel="apple-touch-icon" sizes="114x114" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/880ff53ad664c01602eed044dfc845bc.png">
    <link data-react-html="true" rel="apple-touch-icon" sizes="72x72" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/bf1183e480966acd13d3f2f31d8b0825.png">
    <link data-react-html="true" rel="apple-touch-icon" sizes="57x57" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/a618abade009db344f1f4d07b627c80a.png">
    <link data-react-html="true" rel="apple-touch-startup-image" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/f8d3dc0db81b583b99345bd3dd41aa94.png">
    <link data-react-html="true" rel="preconnect" href="//b.siftscience.com">
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
    <link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/settingsNav-4637d299ffdf8efe672daffe75e816ef825ea8b49668d687cc1153a2b4008acf.css" crossorigin="anonymous">
    
    <link rel="prefetch" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/adminnextfallback-25b8e6ce5ba4e27dc3ebd7c3be9c55caad6efad3d7f4ab3174250cf4fc3b9ce5.css">
    <link rel="prefetch" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/adminnextfallback-56d51c8cd7433d99fc28d8f3e29f79419679190c4096a55a796e449c43d83e87.js">
    <link rel="prefetch" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/TopBarDestinationsSwitcherNext-785b116924b00e6e8e93268ac907b8f5d5de8d0694983b884ecfbfc52584c7a2.css">
    <link rel="prefetch" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/TopBarDestinationsSwitcherNext-4b83da42a10c62432faa4dd4e596ab4de5294526204d0289c7234e1301de1fc9.js">
    <script charset="utf-8" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/vendors~Polaris-i18n-26b21506b29a1fe79ec2eea2e255f25895d9f76b333313f3ccbc3da90637d1fa.js"></script>
    <script charset="utf-8" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/sift-9ace3cef3a9ea7c90452f97e7b6cd8b186f250e62cc6c09a9c69276a37452b99.js"></script>
    <script charset="utf-8" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/vendors~MobileCompatibleCollectionShow~capitalAmendmentTermsDetails~capitalOfferAgreementDetails~col~2db63ec6-ffab1f20f407ff3e9a634d94225be0eca664cb86adf53192f1ab0b9392ee3657.js"></script>
    <script charset="utf-8" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/shopify-encoders-524a3cd076301d7df31cc3aefefb03cfad40df70eeb2344fcb81bf7b30e3fec5.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/TopBarDestinationsSwitcherNext-785b116924b00e6e8e93268ac907b8f5d5de8d0694983b884ecfbfc52584c7a2.css">
    <script charset="utf-8" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/TopBarDestinationsSwitcherNext-4b83da42a10c62432faa4dd4e596ab4de5294526204d0289c7234e1301de1fc9.js"></script>
    <script charset="utf-8" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/switcherStoresQuery-ad78642d4a6704193332ec348feb613fc7af22d08a8cf12463696559bc4276da.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/adminnextfallback-25b8e6ce5ba4e27dc3ebd7c3be9c55caad6efad3d7f4ab3174250cf4fc3b9ce5.css">
    <script charset="utf-8" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/adminnextfallback-56d51c8cd7433d99fc28d8f3e29f79419679190c4096a55a796e449c43d83e87.js"></script>
    <link rel="stylesheet" media="all" crossorigin="anonymous" href="//cdn.shopify.com/shopifycloud/shopify/assets/admin/style-d2f4e72729a97783723b23e6599cff076be2ad63bf18739692444ee8ebf9d82c.css" data-turbolinks-track="admin-style-css" integrity="sha256-0vTnJympd4NyOyPmWZz/B2virWO/GHOWkkRO6Ov52Cw=">
    <link rel="stylesheet" media="print" crossorigin="anonymous" href="//cdn.shopify.com/shopifycloud/shopify/assets/admin/print-7f0c5ed0a8395d2ea0513a46d9084382f7a44dc4e9d2cf3ed10979de35a791aa.css" data-turbolinks-track="admin-print-css" integrity="sha256-fwxe0Kg5XS6gUTpG2QhDgvekTcTp0s8+0Ql53jWnkao=">
   
    <link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/vendors~AppBridgeAutoOpenModal~AppBridgeContextualSaveBar~AppBridgeLoading~AppBridgeModal~AppBridgeT~f8378938-cd516d6de26f94d6ad007ab424d416d7ce1b3a2c992bba41542e44cc098b3b81.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/AddRemoveTagsModal~customerList~orderIndex~orderListCustomizable~productindex-fda696ce66ca26a8bba4df24358a97bda7d4e6c037cd64640758d90d35fe625c.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/orderIndex~orderListCustomizable-bb5994fb2eb2db36c05d79a8a184d01cad35bc934b83be5fc3eb18a5bc31641e.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/orderIndex-e89dd14269d25fa43a92393346d6e274a678ccca1b182da8b77afedfb156e8c1.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/vendors~AppBridgeAutoOpenModal~AppBridgeContextualSaveBar~AppBridgeLoading~AppBridgeModal~AppBridgeT~b6aabeaf-6089ac47e6846d8fa846b0266537fde9cb2bf2dd2897dc99b49e10c4e8f065c9.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/collectionList~customerList~productindex-f7f301d97f77e920185b5f9574adf4cb57a149bf67c5314d0fdf2906bb22b0cd.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/productindex-0fb7964e3bcaff027c3621c1d9925921a2fa958c8fdd57b7a5fe81257c1047c3.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/ProductStatusPeekingCard-a1f34cdbf039bb9b44cd20f8aef8b0bf5832e831fde40fa84a39b9a24238efea.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/vendors~GlimpseContainer~inventoryABCByProductReport~marketingTopTrafficSources~productdetails-c586b16555260251a2586bc10b130a0c783a0273895f1db379d7c915b22de34d.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/vendors~MobileCompatibleCollectionShow~collectiondetails~productdetails-782955f78b605054675906b78855c3121b05fe8a45ed0921cd6bd23a7393919b.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/vendors~productdetails-251d497266d613bfbbc2b83fef94a7e63d9b967571aa7c3530a75b23949b0d4b.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/ManageProfile~MobileCompatibleCollectionShow~analyticsReportViewer~automaticdiscountdetails~collecti~9dd8907f-18e9d82e1bd2275259b9c7e4760b1e110397dea78420188bd809c26d526d36b1.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/MobileCompatibleCollectionShow~collectiondetails~productdetails-e955e39878c1d7c105ddebb97aead2ae18151ed8cf7854d39430a718ffd78a96.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/productdetails~productvariantdetails-393dbfbec3ea6c4212dbb51a09bde400f84ac1f7d4ad6ad96a0565e38f2dd33d.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/productdetails-ef4076eba74ca7674df68628fe4a5cc62823970265e35b10b9f81e85f20191a8.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/productVariantsCard-55bc3aa3a2c3b08780a34adf0a118544541432a987ce436cd862a2bc938a7c7a.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/Metafields-f3f1c010d10e72f6b4c16b53deb419c8ea637b3c7bbe7978a12102265918d759.css">
    <script charset="utf-8" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/vendors~AppBridgeModalHost~embeddedApp~embeddedapp~externalEditorActivity-4978a7ac65945f60b40bff82a5ea067d42811eb43c0686f8cb50d4b6e692b46e.js"></script>
    <script charset="utf-8" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/AppBridgeModalHost-deac695131b01d592593002e75fe3fcd805945afdfb6b20c444572df7cebdf68.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/vendors~homeIndex-4c3b2b75713db5b54310dba1bd35990edc57395680a2e5d3de093e8b93106308.css">
    <script charset="utf-8" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/vendors~homeIndex-a568decb1f900e72911993adbf6686e0b4c21522c045f05d5c6089ffdf29ec35.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/analyticsOnlineStoreSpeed~homeIndex~mtOverview~shippingSettingsIndex-a832e8799ccf7ad12d39484fb29d781f4c02ce3410ef2a6c93a8268bf4949823.css">
    <script charset="utf-8" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/analyticsOnlineStoreSpeed~homeIndex~mtOverview~shippingSettingsIndex-da78a9067ef1b5727ca43d91c11c65cf89aab6840e535a711b93108c6944a8d6.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/homeIndex-04943142203a598dc1fbad624fe393383eee1ab4079ec1a5263708d26e9d2140.css">
    <script charset="utf-8" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/homeIndex-dde6edcfbcf0dc8e012a2002ef812466cf90b6ff52c3b0b3e65c7cd8e1cbfbde.js"></script>
    <script charset="utf-8" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/homeIndexQuery-5e694a9bfb2bcbf3be266758bae36c8777cfbfc41e0c177286b51542185c13c5.js"></script>
    <script charset="utf-8" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/homeOnboardingQuery-473cd660db2c2583292653f4ecd3c14bd0758fd2afbd1f1e09ccd5adcc25e5ed.js"></script>
    <script charset="utf-8" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/homeFeedQuery-3423073f4efd6843270f5712aa946fc72eb414dea36a75c99130591426d94a9c.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/HomeSkeleton-4fcd4e6732d85a03203623665263413553f35851abba53dae709ed6271633530.css">
    <script charset="utf-8" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/HomeSkeleton-bfdad5db08348dae41120a9d8a63f29c2f5ffefc4487cfba54eebf5678d65c79.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/AppBridgeResourcePicker~MobileCompatibleCollectionShow~ShopifyPaymentsDetails~automaticdiscountdetai~f8eeab94-fff5d4d60675dd64bdbc71ddc79522d668f2990931c0dbc3580a48cdf5f8c92c.css">
    <script charset="utf-8" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/AppBridgeResourcePicker~MobileCompatibleCollectionShow~ShopifyPaymentsDetails~automaticdiscountdetai~f8eeab94-ead1c3291b4c7097513ca9ee9a902f4c323c1c02536fd12df53ef4fe57c7deaa.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/AppBridgeResourcePicker~MobileCompatibleCollectionShow~automaticdiscountdetails~collectiondetails~co~77274e6d-7d68c96183c416cafc3d380fc948c38fa6c92d7a65380cbd96d00bbbf9b51b97.css">
    <script charset="utf-8" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/AppBridgeResourcePicker~MobileCompatibleCollectionShow~automaticdiscountdetails~collectiondetails~co~77274e6d-f2b9b74186eee6965b1ab355efefc2657e33250affda9e94f124e0be68165404.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/collectiondetails-71584bbfe4dd1124eef8d617852e1b6a92060e0da88c48aeef2d8d5dd010deb8.css">
    <script charset="utf-8" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/collectiondetails-cb70b991c1fe7c090f61ba6a05de841e1d33b38f63e8a337ddcc3dbf30c26c76.js"></script>
    <script charset="utf-8" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/MobileCompatibleCollectionShow-0a197cda00db9b298bd8f926580b06891085e2dddcaa3e5558ca4ef90fcd0d9b.js"></script>

    <meta name="referrer" content="never">
    <meta name="csrf-param" content="authenticity_token">
    <meta name="csrf-token" content="PVC3DkmA1gu1q89BSEpKof3Yp3XXg/sPLq0NIJni8LpCXWhaEXKyY3xS3SWBEBH5AxNpPXeBnkPfgvTRNeiEdw==">
    <meta name="normalized-pathname" content="/admin/collections/index">
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
    <link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/automationsIndex~campaignsIndex~marketingCampaignDetail~marketingTemplates~mtOverview-371f8c8f362890a8618fd39ef4aca9aa2e8ce695f2c25db35a6a544a351d7f9b.css">
    <script charset="utf-8" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/automationsIndex~campaignsIndex~marketingCampaignDetail~marketingTemplates~mtOverview-52446848534bb1677a65bd0330e8ee062f1fb06e2c604a25e4a8804149db5e0f.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/archivedCampaignsIndex~campaignsIndex~mtOverview-6d5676f0e9ce8a425ba2e1742eab0c2c24d7c97405d3e666ed3d8c4c8f461917.css">
    <script charset="utf-8" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/archivedCampaignsIndex~campaignsIndex~mtOverview-2c5474f8789e9b1d85281606dfeb95ea00fd4d5fea8a2b57ad3b86b16a60c66d.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/automationsIndex~mtOverview-cca016ef3e627b722ef434bb6a3044cf2b0242b714f51e8ee2aa93b58ae4bc2c.css">
    <script charset="utf-8" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/automationsIndex~mtOverview-7ad1f48dbd14b0a56126a6ee5f96d3c2f37c8bf2ad328aa376c6a28ce6c34088.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/mtOverview-1e276adabc41b88b4cdf83599f3a0d0a21bb7bad39e58141c3dc88c5ab56f32a.css">
    <script charset="utf-8" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/mtOverview-d51a2b0452e54ac9e8f6d98c61b4f907156b9710fd38f229324a59f1a8fd6cc5.js"></script>
    <script charset="utf-8" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/mtOverviewQuery-d13587284c69324f95e78dd10a081948a0a45cd370e894d820aa849d995c0793.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/customerList-e913bdc7ed9fce6515e4e3c47875c156a5d18ff49cf66dfc642ed06890020a39.css">
    <script charset="utf-8" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/customerList-5e1ac47b93148e101c6260a0cc0e43359488305fb0b204fb1c59edfc410c19e6.js"></script>
    <script charset="utf-8" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/customerListEmptyStateQuery-ae440ccabfd26f6539427bebd0fec7c623b140c7a046d14ce97b4fd49a2ec164.js"></script>
    <script charset="utf-8" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/customerListQuery-f4644a9281c1e6d86be15a57d1f308bb74b2b3ca33b4c97e1d961998959d4626.js"></script>
    <script charset="utf-8" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/appBulkActionsQuery-d56fd899997944b43965241f4edcd44ff5ff83d415f8836469b256e3fbe3163a.js"></script>
    <script charset="utf-8" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/customerCountQuery-0a51a5d61e043138637f6d70c32299de3e0f17210f01be4a09371c1a90391496.js"></script>
    <script charset="utf-8" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/customerSavedSearchesQuery-9bd7f80d19a5f33947c13c87d8e9b8bdb3fcb442b1ec9e4448a6a6bf0c8c9090.js"></script>
    <script charset="utf-8" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/shopCustomerTags-8e50842c6ae8d150fdc2610552484d20f3c90f4f38f2a196275060dc18a4d1ce.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/ImportCustomersModal-bfcfbdc1f4954dca1bf08e23a7d3cadd9c9d99f797f9c7c1841f9db0e9d12492.css">
    <script charset="utf-8" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/ImportCustomersModal-e1cfa0a54cb9c18515074db0629260993d3dd6f54b4158dcbd129e0aa6a89a1b.js"></script>
    <script charset="utf-8" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/CustomerImportDetailsQuery-669a55ea67e2b90a73464a7746447d7697ee98b8456a9051ae0c155cd9a3d684.js"></script>
    <script charset="utf-8" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/ExportCustomersModal-ca22a6b4d9de13b7a338b360a39a181d261b0b09e9df1501de909e09d84ed7e7.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/customerCreate-88ee6f97d1518cb987f62451867a5861e8924c3f6c0c65c53dfac0b49ca60ff3.css">
    <script charset="utf-8" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/customerCreate-5acff9ad8a83c7e7444c08d8226808838f73caaea1d24b1322cd45e7581fa2f0.js"></script>
    <script charset="utf-8" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/bundledFlags-3546aea09b2181be15692dc02f1d9738a3fa1ea01cd8d49e33e2b259a5a30708.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/customerDetails-a50436296e1d8002c32d3767bd3054ec3b1204765840109a4266c3fedfcdf73b.css">
    <script charset="utf-8" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/customerDetails-88a38d38b924eeaf8207cdac880a8759b823166a6246c060703775b2e2cd9e04.js"></script>
    <script charset="utf-8" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/customerDetailsQuery-ffdce6d5ca6e1dfe84777ced87d3966dccf015f04e2f771fb71cf9db3d4894d1.js"></script>
    <script charset="utf-8" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/customerRecentOrdersQuery-65d61aa17c57e594794f491aba7f4f6eab2f1ea0f7fedd95a0dcbf46dc6e2584.js"></script>

<div class="Polaris-Frame__ContextualSaveBar_14m7v Polaris-Frame-CSSAnimation--startFade_1gu4x"></div>
                    <main class="Polaris-Frame__Main_yj28s Polaris-Frame__Main--newDesignLanguage_129jf" id="AppFrameMain" data-has-global-ribbon="false"><a id="AppFrameMainContent" tabindex="-1"></a>
                        <div class="Polaris-Frame__Content_xd1mk">
                            <div class="Polaris-Page_yisnh Polaris-Page--fullWidth_zyvh4 Polaris-Page--newDesignLanguage_1rik8">
                                <div class="Polaris-Page-Header_z4uwg Polaris-Page-Header--hasActionMenu_1wx04 Polaris-Page-Header--noBreadcrumbs_bdstf Polaris-Page-Header--newDesignLanguage_1rik8 Polaris-Page-Header--mediumTitle_bfol6">
                                    <div class="Polaris-Page-Header__Row_375v7 Polaris-Page-Header__RowCondensed_1gexu">
                                        <h2 style="font-weight: 600;">Customers</h2>
                                    </div>
                                </div>
                                <div class="Polaris-Page__Content_xd1mk">
                                    <div class="Polaris-Card_yis1o Polaris-Card--newDesignLanguage_1rik8">
                                        <div>
                                            <div class="Polaris-Tabs__Wrapper_mkrm3 Polaris-Tabs--newDesignLanguage_1rik8">
                                                <ul role="tablist" class="Polaris-Tabs_yjc8o Polaris-Tabs--fillSpace_yc42y Polaris-Tabs--newDesignLanguage_1rik8">
                                                    <li class="Polaris-Tabs__TabContainer_dsj6d Polaris-Tabs--newDesignLanguage_1rik8" role="presentation"><a data-polaris-unstyled="true" id="ALL_SEARCH" role="tab" tabindex="0" class="Polaris-Tabs__Tab_375k2 Polaris-Tabs__Tab--selected_11sap" aria-selected="true" aria-controls="ALL_SEARCH-panel" href="/admin/customers"><span class="Polaris-Tabs__Title_2qj8j Polaris-Tabs--newDesignLanguage_1rik8">All</span></a></li>
                                                    <li class="Polaris-Tabs__TabContainer_dsj6d Polaris-Tabs--newDesignLanguage_1rik8" role="presentation"><a data-polaris-unstyled="true" id="gid://shopify/SavedSearch/2022801409" role="tab" tabindex="-1" class="Polaris-Tabs__Tab_375k2" aria-selected="false" aria-controls="gid://shopify/SavedSearch/2022801409-panel" href="/admin/customers?saved_search_id=2022801409"><span class="Polaris-Tabs__Title_2qj8j Polaris-Tabs--newDesignLanguage_1rik8">New</span></a></li>
                                                    <li class="Polaris-Tabs__TabContainer_dsj6d Polaris-Tabs--newDesignLanguage_1rik8" role="presentation"><a data-polaris-unstyled="true" id="gid://shopify/SavedSearch/2022834177" role="tab" tabindex="-1" class="Polaris-Tabs__Tab_375k2" aria-selected="false" aria-controls="gid://shopify/SavedSearch/2022834177-panel" href="/admin/customers?saved_search_id=2022834177"><span class="Polaris-Tabs__Title_2qj8j Polaris-Tabs--newDesignLanguage_1rik8">Returning</span></a></li>
                                                    <li class="Polaris-Tabs__TabContainer_dsj6d Polaris-Tabs--newDesignLanguage_1rik8" role="presentation"><a data-polaris-unstyled="true" id="gid://shopify/SavedSearch/2022866945" role="tab" tabindex="-1" class="Polaris-Tabs__Tab_375k2" aria-selected="false" aria-controls="gid://shopify/SavedSearch/2022866945-panel" href="/admin/customers?saved_search_id=2022866945"><span class="Polaris-Tabs__Title_2qj8j Polaris-Tabs--newDesignLanguage_1rik8">Abandoned checkouts</span></a></li>
                                                    <li class="Polaris-Tabs__TabContainer_dsj6d Polaris-Tabs--newDesignLanguage_1rik8" role="presentation"><a data-polaris-unstyled="true" id="gid://shopify/SavedSearch/2022899713" role="tab" tabindex="-1" class="Polaris-Tabs__Tab_375k2" aria-selected="false" aria-controls="gid://shopify/SavedSearch/2022899713-panel" href="/admin/customers?saved_search_id=2022899713"><span class="Polaris-Tabs__Title_2qj8j Polaris-Tabs--newDesignLanguage_1rik8">Accepts Marketing</span></a></li>
                                                   
                                                </ul>
                                              
                                            </div>
                                        </div>
                                        <div class="Polaris-ResourceList__ResourceListWrapper_1a76j">
                                            <div class="Polaris-ResourceList__FiltersWrapper_13e37">
                                                <div class="_2TtWS">
                                                    <div class="_3hn83">
                                                        <div class="Polaris-Filters_upqyz">
                                                           
                                                            <div class="Polaris-Filters-ConnectedFilterControl__Wrapper_mkrm3">
                                                                <div class="Polaris-Filters-ConnectedFilterControl_32yio Polaris-Filters-ConnectedFilterControl--right_312wf Polaris-Filters-ConnectedFilterControl--newDesignLanguage_1rik8">
                                                                    <div class="Polaris-Filters-ConnectedFilterControl__CenterContainer_kh80i">
                                                                        <div class="Polaris-Filters-ConnectedFilterControl__Item_yiyol">
                                                                            <div class="Polaris-Labelled--hidden_riqie">
                                                                                <div class="Polaris-Labelled__LabelWrapper_bf6ys">
                                                                                    <div class="Polaris-Label_2vd36"><label id="PolarisTextField42Label" for="PolarisTextField42" class="Polaris-Label__Text_yj3uv">Filter customers</label></div>
                                                                                </div>
                                                                                <div class="Polaris-Connected_wopc9 Polaris-Connected--newDesignLanguage_1rik8">
                                                                                    <div class="Polaris-Connected__Item_yiyol Polaris-Connected__Item--primary_rmh5m">
                                                                                        <div class="Polaris-TextField_1spwi Polaris-TextField--newDesignLanguage_1rik8">
                                                                                            <div class="Polaris-TextField__Prefix_10fbz" id="PolarisTextField42Prefix"><span class="Polaris-Filters__SearchIcon_158og"><span class="Polaris-Icon_yj27d Polaris-Icon--newDesignLanguage_1rik8"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                                                                                                            <path d="M8 12a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm9.707 4.293l-4.82-4.82A5.968 5.968 0 0 0 14 8 6 6 0 0 0 2 8a6 6 0 0 0 6 6 5.968 5.968 0 0 0 3.473-1.113l4.82 4.82a.997.997 0 0 0 1.414 0 .999.999 0 0 0 0-1.414z"></path>
                                                                                                        </svg></span></span></div><input id="PolarisTextField42" placeholder="Filter customers" class="Polaris-TextField__Input_30ock Polaris-TextField__Input--hasClearButton_15k6h" aria-labelledby="PolarisTextField42Label PolarisTextField42Prefix" aria-invalid="false" aria-multiline="false" value="">
                                                                                            <div class="Polaris-TextField__Backdrop_1x2i2"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="Polaris-Filters-ConnectedFilterControl__AuxiliaryContainer_20w7m">
                                                                    <div class="NpYVI">
                                                                        <div class="_13909">
                                                                            <div style="width: 91.7969px;">
                                                                                <div class="_1iGuE" testid="SaveSearchProxyButtonContainer" aria-hidden="true"><button class="Polaris-Button_r99lw Polaris-Button--newDesignLanguage_1rik8" type="button"><span class="Polaris-Button__Content_xd1mk"><span class="Polaris-Button__Text_yj3uv">Group</span></span></button></div><button class="Polaris-Button_r99lw Polaris-Button--newDesignLanguage_1rik8 Polaris-Button--fullWidth_zyvh4" type="button" disabled="" aria-pressed="false"><span class="Polaris-Button__Content_xd1mk"><span class="Polaris-Button__Icon_yj27d"></span><span class="Polaris-Button__Text_yj3uv">Group</span></span></button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div><span class="Polaris-VisuallyHidden_yrtt5">
                                                                <div class="Polaris-Filters__TagsContainer_sze4w" aria-live="polite"></div>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="Polaris-ResourceList__HeaderOuterWrapper_1izjo">
                                                <div>
                                                    <div style="padding-bottom: 0px;"></div>
                                                    <div style="">
                                                        <div class="Polaris-ResourceList__HeaderWrapper_9w2pa Polaris-ResourceList__HeaderWrapper--hasSort_1dpae Polaris-ResourceList__HeaderWrapper--hasSelect_hr9d4">
                                                            <div class="Polaris-ResourceList__HeaderContentWrapper_do6y8">
                                                                <div class="Polaris-ResourceList__HeaderTitleWrapper_1ygr8">Showing 19 of 19 customers</div>
                                                                <div class="Polaris-ResourceList__CheckableButtonWrapper_1mxl4">
                                                                    <div class="Polaris-CheckableButton_1a7z5 Polaris-CheckableButton__CheckableButton--plain_vhvci Polaris-CheckableButton--newDesignLanguage_1rik8">
                                                                        <div class="Polaris-CheckableButton__Checkbox_1d6zr"><label class="Polaris-Choice_j5gzq Polaris-Choice--labelHidden_14tn9" for="PolarisCheckbox19"><span class="Polaris-Choice__Label_2vd36">Select all 1 customers</span></label></div><span class="Polaris-CheckableButton__Label_2vd36">Showing 1 of 1 customers</span>
                                                                    </div>
                                                                </div>
                                                                <div class="Polaris-ResourceList__SortWrapper_1kang">
                                                                    <div class="">
                                                                        <div class="Polaris-Select_ss8pm Polaris-Select--newDesignLanguage_1rik8"><select id="PolarisSelect1" class="Polaris-Select__Input_30ock" aria-invalid="false" onchange="selector(this)">
                                                                                <option value="UPDATED_AT+desc">Group A</option>
                                                                                <option value="UPDATED_AT+asc">Group B</option>
                                                                                <option value="TOTAL_SPENT+desc">Group C</option>
                                                                                <option value="TOTAL_SPENT+asc">Group D</option>
                                                                                <option value="ORDERS_COUNT+desc">Group E</option>
                                                                                <option value="ORDERS_COUNT+asc">Group F</option>
                                                                                <option value="LAST_ORDER_DATE+desc">Group G</option>
                                                                                <option value="LAST_ORDER_DATE+asc">Group H</option>
                                                                                <option value="CREATED_AT+desc">Group I</option>
                                                                                <option value="CREATED_AT+asc">Group J</option>
                                                                            </select>
                                                                           
                                                                            <div class="Polaris-Select__Content_xd1mk" aria-hidden="true" aria-disabled="false"><span class="Polaris-Select__InlineLabel_16kzb">Sort by</span><span class="Polaris-Select__SelectedOption_azu52" id="Polaris-Select__SelectedOption_azu52"></span><span class="Polaris-Select__Icon_yj27d"><span class="Polaris-Icon_yj27d Polaris-Icon--newDesignLanguage_1rik8"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                                                                                            <path d="M10 16l-4-4h8l-4 4zm0-12l4 4H6l4-4z"></path>
                                                                                        </svg></span></span></div>
                                                                            <div class="Polaris-Select__Backdrop_1x2i2"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                 <script>
                                                            function selector(sel) 
                                                                {
                                                                   var name = sel.options[sel.selectedIndex].text; document.getElementById('Polaris-Select__SelectedOption_azu52').innerHTML=sel.options[sel.selectedIndex].text;
                                                                }
                                                            </script>
                                                                <div class="Polaris-ResourceList__SelectButtonWrapper_1vvjw"><button class="Polaris-Button_r99lw Polaris-Button--newDesignLanguage_1rik8" type="button"><span class="Polaris-Button__Content_xd1mk"><span class="Polaris-Button__Icon_yj27d"><span class="Polaris-Icon_yj27d Polaris-Icon--newDesignLanguage_1rik8"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                                                                                        <path fill-rule="evenodd" d="M4.5 3A1.5 1.5 0 0 0 3 4.5v11A1.5 1.5 0 0 0 4.5 17h11a1.5 1.5 0 0 0 1.5-1.5v-11A1.5 1.5 0 0 0 15.5 3h-11zm9.207 5.707a1 1 0 0 0-1.414-1.414L9 10.586 7.707 9.293a1 1 0 0 0-1.414 1.414l2 2a1 1 0 0 0 1.414 0l4-4z"></path>
                                                                                    </svg></span></span><span class="Polaris-Button__Text_yj3uv">Select</span></span></button></div>
                                                            </div>
                                                            <div class="Polaris-ResourceList__BulkActionsWrapper_9c77q">
                                                                <div>
                                                                    <div class="Polaris-BulkActions__Group_33bvy Polaris-BulkActions__Group--largeScreen_bogqt Polaris-BulkActions__Group--exited_8lefn">
                                                                        <div class="Polaris-BulkActions__ButtonGroupWrapper_1qcgd">
                                                                            <div class="Polaris-ButtonGroup_yy85z Polaris-ButtonGroup--segmented_150jh" data-buttongroup-segmented="true">
                                                                                <div class="Polaris-ButtonGroup__Item_yiyol">
                                                                                    <div class="Polaris-CheckableButton_1a7z5 Polaris-CheckableButton--newDesignLanguage_1rik8">
                                                                                        <div class="Polaris-CheckableButton__Checkbox_1d6zr"><label class="Polaris-Choice_j5gzq Polaris-Choice--labelHidden_14tn9" for="PolarisCheckbox20"><span class="Polaris-Choice__Control_1u8vs"><span class="Polaris-Checkbox_1d6zr Polaris-Checkbox--newDesignLanguage_1rik8"><input id="PolarisCheckbox20" type="checkbox" class="Polaris-Checkbox__Input_30ock" aria-invalid="false" role="checkbox" aria-checked="false" value=""><span class="Polaris-Checkbox__Backdrop_1x2i2"></span><span class="Polaris-Checkbox__Icon_yj27d"><span class="Polaris-Icon_yj27d Polaris-Icon--newDesignLanguage_1rik8"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                                                                                                                    <path d="M8.315 13.859l-3.182-3.417a.506.506 0 0 1 0-.684l.643-.683a.437.437 0 0 1 .642 0l2.22 2.393 4.942-5.327a.436.436 0 0 1 .643 0l.643.684a.504.504 0 0 1 0 .683l-5.91 6.35a.437.437 0 0 1-.642 0"></path>
                                                                                                                </svg></span></span></span></span><span class="Polaris-Choice__Label_2vd36">Select all 19 customers</span></label></div><span class="Polaris-CheckableButton__Label_2vd36">0 selected</span>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="Polaris-ButtonGroup__Item_yiyol">
                                                                                    <div class="Polaris-BulkActions__BulkActionButton_1njj8"><button class="Polaris-Button_r99lw Polaris-Button--newDesignLanguage_1rik8" type="button"><span class="Polaris-Button__Content_xd1mk"><span class="Polaris-Button__Text_yj3uv">Edit customers</span></span></button></div>
                                                                                </div>
                                                                                <div class="Polaris-ButtonGroup__Item_yiyol">
                                                                                    <div>
                                                                                        <div>
                                                                                            <div class="Polaris-BulkActions__BulkActionButton_1njj8"><button class="Polaris-Button_r99lw Polaris-Button--newDesignLanguage_1rik8" type="button" tabindex="0" aria-controls="Polarispopover300" aria-owns="Polarispopover300" aria-expanded="false"><span class="Polaris-Button__Content_xd1mk"><span class="Polaris-Button__Text_yj3uv">More actions</span><span class="Polaris-Button__Icon_yj27d">
                                                                                                            <div class="Polaris-Button__DisclosureIcon_j5n4l"><span class="Polaris-Icon_yj27d Polaris-Icon--newDesignLanguage_1rik8"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                                                                                                                        <path d="M5 8l5 5 5-5H5z"></path>
                                                                                                                    </svg></span></div>
                                                                                                        </span></span></button></div>
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
                                            <ul class="Polaris-ResourceList_r589e" aria-live="polite" aria-busy="false">
                                               
                                                <li class="Polaris-ResourceItem__ListItem_wxd2m Polaris-ResourceItem--newDesignLanguage_1rik8">
                                                    <div class="Polaris-ResourceItem__ItemWrapper_1kbav">
                                                        <div class="Polaris-ResourceItem_1uu16 Polaris-ResourceItem--newDesignLanguage_1rik8 Polaris-ResourceItem--selectable_1tkx2" data-href="/admin/customers/2965277540401"><a data-polaris-unstyled="true" aria-describedby="gid://shopify/Customer/2965277540401" aria-label="View details for DavidAlvis 234" class="Polaris-ResourceItem__Link_yj5sy" tabindex="0" id="PolarisResourceListItemOverlay21" href="/admin/customers/2965277540401"></a>
                                                            <div class="Polaris-ResourceItem__Container_13mbo" id="gid://shopify/Customer/2965277540401">
                                                                <div class="Polaris-ResourceItem__Owned_2ppue Polaris-ResourceItem__OwnedNoMedia_19z6h">
                                                                    <div class="Polaris-ResourceItem__Handle_ja6k3">
                                                                        <div class="Polaris-ResourceItem__CheckboxWrapper_11ah0">
                                                                            <div><label class="Polaris-Choice_j5gzq Polaris-Choice--labelHidden_14tn9" for="PolarisResourceListItemCheckbox21"><span class="Polaris-Choice__Control_1u8vs"><span class="Polaris-Checkbox_1d6zr Polaris-Checkbox--newDesignLanguage_1rik8"><input id="PolarisResourceListItemCheckbox21" type="checkbox" class="Polaris-Checkbox__Input_30ock" aria-invalid="false" role="checkbox" aria-checked="false" value=""><span class="Polaris-Checkbox__Backdrop_1x2i2"></span><span class="Polaris-Checkbox__Icon_yj27d"><span class="Polaris-Icon_yj27d Polaris-Icon--newDesignLanguage_1rik8"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                                                                                                        <path d="M8.315 13.859l-3.182-3.417a.506.506 0 0 1 0-.684l.643-.683a.437.437 0 0 1 .642 0l2.22 2.393 4.942-5.327a.436.436 0 0 1 .643 0l.643.684a.504.504 0 0 1 0 .683l-5.91 6.35a.437.437 0 0 1-.642 0"></path>
                                                                                                    </svg></span></span></span></span><span class="Polaris-Choice__Label_2vd36">View details for DavidAlvis 234</span></label></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="Polaris-ResourceItem__Content_xd1mk">
                                                                    <div class="_2J5U4">
                                                                        <div class="Polaris-Stack_32wu2 Polaris-Stack--vertical_uiuuj Polaris-Stack--spacingExtraTight_gv6hw Polaris-Stack--distributionEqualSpacing_x9cqm">
                                                                            <div class="Polaris-Stack__Item_yiyol">
                                                                                <div class="Polaris-Stack_32wu2 Polaris-Stack--distributionEqualSpacing_x9cqm Polaris-Stack--noWrap_vecks">
                                                                                    <div class="Polaris-Stack__Item_yiyol"><span class="Polaris-TextStyle--variationStrong_rpyvj">
                                                                                            <div class="_3enmF">DavidAlvis 234</div>
                                                                                        </span></div>
                                                                                    <div class="Polaris-Stack__Item_yiyol">
                                                                                        <div class="_3pr6R"><span class="Polaris-Badge_2qgie Polaris-Badge--statusSuccess_pc5rl"><span class="Polaris-VisuallyHidden_yrtt5">Success </span>Subscribed</span></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="Polaris-Stack__Item_yiyol">
                                                                                <p class="_2JgJn">BossierCity, WA, Australia</p>
                                                                            </div>
                                                                            <div class="Polaris-Stack__Item_yiyol">
                                                                                <p class="k-NcH">2 orders</p>
                                                                            </div>
                                                                            <div class="Polaris-Stack__Item_yiyol">
                                                                                <p class="_1k247">€551.99 spent</p>
                                                                            </div>
                                                                            <div class="Polaris-Stack__Item_yiyol">
                                                                                <div class="_24KQQ">
                                                                                    <div class="_1nhaU"><span class="Polaris-TextStyle--variationSubdued_1segu">New Note</span></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="_3VJLX">
                                                                        <div class="Polaris-Stack_32wu2 Polaris-Stack--spacingExtraTight_gv6hw Polaris-Stack--distributionEqualSpacing_x9cqm">
                                                                            <div class="Polaris-Stack__Item_yiyol">
                                                                                <div class="Polaris-Stack_32wu2 Polaris-Stack--vertical_uiuuj Polaris-Stack--spacingExtraTight_gv6hw Polaris-Stack--distributionLeading_rudtn">
                                                                                    <div class="Polaris-Stack__Item_yiyol"><span class="Polaris-TextStyle--variationStrong_rpyvj">
                                                                                            <div class="_3enmF">DavidAlvis 4</div>
                                                                                        </span></div>
                                                                                    <div class="Polaris-Stack__Item_yiyol">
                                                                                        <p class="_2JgJn">BossierCity, WA, Australia</p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="Polaris-Stack__Item_yiyol">
                                                                                <div class="Polaris-Stack_32wu2 Polaris-Stack--spacingExtraLoose_1ptvt Polaris-Stack--distributionTrailing_z5d5z">
                                                                                    <div class="Polaris-Stack__Item_yiyol">
                                                                                        <div class="_3pr6R"><span class="Polaris-Badge_2qgie Polaris-Badge--statusSuccess_pc5rl"><span class="Polaris-VisuallyHidden_yrtt5">Success </span>Subscribed</span></div>
                                                                                    </div>
                                                                                    <div class="Polaris-Stack__Item_yiyol">
                                                                                        <p class="k-NcH">2 orders</p>
                                                                                    </div>
                                                                                    <div class="Polaris-Stack__Item_yiyol">
                                                                                        <p class="_1k247">€551.99 spent</p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                </div>
                                                                <div class="Polaris-ResourceItem__Actions_17m67">
                                                                    <div class="Polaris-ButtonGroup_yy85z Polaris-ButtonGroup--segmented_150jh" data-buttongroup-segmented="true">
                                                                        <div class="Polaris-ButtonGroup__Item_yiyol"><a data-polaris-unstyled="true" class="Polaris-Button_r99lw Polaris-Button--newDesignLanguage_1rik8 Polaris-Button--sizeSlim_1p6ue" aria-label="View latest order (#1060)" href="customerabout.html"><span class="Polaris-Button__Content_xd1mk"><span class="Polaris-Button__Text_yj3uv">View Profile</span></span></a></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                
                                            </ul>
                                        </div>
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
                                                <div class="Polaris-Stack__Item_yiyol"><a data-polaris-unstyled="true" class="Polaris-Button_r99lw Polaris-Button--newDesignLanguage_1rik8 Polaris-Button--primary_7k9zs" href="/admin/settings"><span class="Polaris-Button__Content_xd1mk"><span class="Polaris-Button__Text_yj3uv">Refresh</span></span></a></div>
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
                <div data-portal-id="popover-Polarisportal4"></div>
                <div data-portal-id="popover-Polarisportal5"></div>
                <div data-portal-id="sheet-Polarisportal544"></div>
                <div data-portal-id="modal-Polarisportal545">
                    <div></div>
                </div>
                <div data-portal-id="modal-Polarisportal546">
                    <div></div>
                </div>
                <div data-portal-id="modal-Polarisportal547">
                    <div></div>
                </div>
                <div data-portal-id="modal-Polarisportal548">
                    <div></div>
                </div>
                <div data-portal-id="modal-Polarisportal549">
                    <div></div>
                </div>
                <div data-portal-id="popover-Polarisportal550"></div>
                <div data-portal-id="popover-Polarisportal553"></div>
                <div data-portal-id="popover-Polarisportal555"></div>
            </div>
        </div>
    </div>
  
    <style>
        .tb_button {
            padding: 1px;
            cursor: pointer;
            border-right: 1px solid #8b8b8b;
            border-left: 1px solid #FFF;
            border-bottom: 1px solid #fff;
        }

        .tb_button.hover {
            border: 2px outset #def;
            background-color: #f8f8f8 !important;
        }

        .ws_toolbar {
            z-index: 100000
        }

        .ws_toolbar .ws_tb_btn {
            cursor: pointer;
            border: 1px solid #555;
            padding: 3px
        }

        .tb_highlight {
            background-color: yellow
        }

        .tb_hide {
            visibility: hidden
        }

        .ws_toolbar img {
            padding: 2px;
            margin: 0px
        }

    </style>

@endsection