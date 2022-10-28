@extends('layouts.admin')
@section('title', 'Products')
@section('content')

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
    <link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/vendors~AppBridgeAutoOpenModal~AppBridgeContextualSaveBar~AppBridgeLoading~AppBridgeModal~AppBridgeT~b6aabeaf-6089ac47e6846d8fa846b0266537fde9cb2bf2dd2897dc99b49e10c4e8f065c9.css" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/vendors~GlimpseContainer~inventoryABCByProductReport~marketingTopTrafficSources~productdetails-c586b16555260251a2586bc10b130a0c783a0273895f1db379d7c915b22de34d.css" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/vendors~MobileCompatibleCollectionShow~collectiondetails~productdetails-782955f78b605054675906b78855c3121b05fe8a45ed0921cd6bd23a7393919b.css" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/vendors~productdetails-251d497266d613bfbbc2b83fef94a7e63d9b967571aa7c3530a75b23949b0d4b.css" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/ManageProfile~MobileCompatibleCollectionShow~analyticsReportViewer~automaticdiscountdetails~collecti~9dd8907f-18e9d82e1bd2275259b9c7e4760b1e110397dea78420188bd809c26d526d36b1.css" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/MobileCompatibleCollectionShow~collectiondetails~productdetails-e955e39878c1d7c105ddebb97aead2ae18151ed8cf7854d39430a718ffd78a96.css" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/productdetails~productvariantdetails-393dbfbec3ea6c4212dbb51a09bde400f84ac1f7d4ad6ad96a0565e38f2dd33d.css" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/productdetails-ef4076eba74ca7674df68628fe4a5cc62823970265e35b10b9f81e85f20191a8.css" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/PagePresence-566c4a11b98c08351e3cacb7f8595c0896a3b2d4e434e9dd8f5273832dfc2f13.css" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/productVariantsCard-55bc3aa3a2c3b08780a34adf0a118544541432a987ce436cd862a2bc938a7c7a.css" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/Metafields-f3f1c010d10e72f6b4c16b53deb419c8ea637b3c7bbe7978a12102265918d759.css" crossorigin="anonymous">
    <link rel="prefetch" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/adminnextfallback-25b8e6ce5ba4e27dc3ebd7c3be9c55caad6efad3d7f4ab3174250cf4fc3b9ce5.css">
    <link rel="prefetch" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/adminnextfallback-56d51c8cd7433d99fc28d8f3e29f79419679190c4096a55a796e449c43d83e87.js">
    <link rel="prefetch" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/TopBarDestinationsSwitcherNext-785b116924b00e6e8e93268ac907b8f5d5de8d0694983b884ecfbfc52584c7a2.css">
    <link rel="prefetch" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/TopBarDestinationsSwitcherNext-4b83da42a10c62432faa4dd4e596ab4de5294526204d0289c7234e1301de1fc9.js">
    <link rel="prefetch" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/productVariantsCard-93d7d349e0362459bace6d8d2262222270058a4b0864f51622cdfa5f9e6afe12.js">
    <link rel="prefetch" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/Metafields-6d391d4f9674c20d5dcf369c4f3f4ca30ea4cc774c804a8b2623d29344ff1bb2.js">
    <link rel="prefetch" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/vendors~AppBridgeModalHost~embeddedApp~embeddedapp~externalEditorActivity~purchaseShippingLabels~rep~b228dea6-205660eafbc42407def530ad994277bb4d02871c370b2a2682c7761992119463.js">
    <link rel="prefetch" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/vendors~AppBridgeModalHost~embeddedApp~embeddedapp~externalEditorActivity-4978a7ac65945f60b40bff82a5ea067d42811eb43c0686f8cb50d4b6e692b46e.js">
    <link rel="prefetch" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/AppBridgeModalHost-deac695131b01d592593002e75fe3fcd805945afdfb6b20c444572df7cebdf68.js">
    <link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/TopBarDestinationsSwitcherNext-785b116924b00e6e8e93268ac907b8f5d5de8d0694983b884ecfbfc52584c7a2.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/vendors~AppBridgeAutoOpenModal~AppBridgeContextualSaveBar~AppBridgeLoading~AppBridgeModal~AppBridgeT~f8378938-cd516d6de26f94d6ad007ab424d416d7ce1b3a2c992bba41542e44cc098b3b81.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/AddRemoveTagsModal~customerList~orderIndex~orderListCustomizable~productindex-fda696ce66ca26a8bba4df24358a97bda7d4e6c037cd64640758d90d35fe625c.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/orderIndex~orderListCustomizable-bb5994fb2eb2db36c05d79a8a184d01cad35bc934b83be5fc3eb18a5bc31641e.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/orderIndex-e89dd14269d25fa43a92393346d6e274a678ccca1b182da8b77afedfb156e8c1.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/collectionList~customerList~productindex-f7f301d97f77e920185b5f9574adf4cb57a149bf67c5314d0fdf2906bb22b0cd.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/productindex-0fb7964e3bcaff027c3621c1d9925921a2fa958c8fdd57b7a5fe81257c1047c3.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/ProductStatusPeekingCard-a1f34cdbf039bb9b44cd20f8aef8b0bf5832e831fde40fa84a39b9a24238efea.css">


<div class="Polaris-Frame__ContextualSaveBar_14m7v Polaris-Frame-CSSAnimation--startFade_1gu4x"></div>
                    <main class="Polaris-Frame__Main_yj28s Polaris-Frame__Main--newDesignLanguage_129jf" id="AppFrameMain" data-has-global-ribbon="false"><a id="AppFrameMainContent" tabindex="-1"></a>
                        <div class="Polaris-Frame__Content_xd1mk">
                            <div class="Polaris-Page_yisnh Polaris-Page--fullWidth_zyvh4 Polaris-Page--newDesignLanguage_1rik8">
                                <div class="Polaris-Page-Header_z4uwg Polaris-Page-Header--hasActionMenu_1wx04 Polaris-Page-Header--mobileView_i07vm Polaris-Page-Header--noBreadcrumbs_bdstf Polaris-Page-Header--newDesignLanguage_1rik8 Polaris-Page-Header--mediumTitle_bfol6">
                                    <div class="Polaris-Page-Header__Row_375v7 Polaris-Page-Header__RowCondensed_1gexu">
                                        <div class="Polaris-Page-Header__TitleWrapper_bejfn">
                                            <div>
                                                <div class="Polaris-Header-Title__TitleAndSubtitleWrapper_40sxf">
                                                    <div class="Polaris-Header-Title_2qj8j">
                                                        <h1 class="Polaris-Header-Title--newDesignLanguageTitle_1wh8d">Products</h1>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="Polaris-Page-Header__RightAlign_1ok1p">
                                            <div class="Polaris-Page-Header__Actions_17m67">
                                                <div class="Polaris-ActionMenu_1hlnt Polaris-ActionMenu--rollup_v0nyr Polaris-ActionMenu--newDesignLanguage_1rik8">
                                                    <div class="Polaris-ButtonGroup_yy85z Polaris-ButtonGroup--extraTight_1xh3x">
                                                        <div class="Polaris-ButtonGroup__Item_yiyol"><span class="Polaris-ActionMenu-SecondaryAction_1dl4i Polaris-ActionMenu-SecondaryAction--newDesignLanguage_1rik8"><button class="Polaris-Button_r99lw Polaris-Button--newDesignLanguage_1rik8" type="button" onclick="Display_export()"><span class="Polaris-Button__Content_xd1mk"><span class="Polaris-Button__Text_yj3uv">Export</span></span></button></span></div>
                                                        
                                                        <!--Export Box-->
                                                        <div class="Polaris-ButtonGroup__Item_yiyol"><span class="Polaris-ActionMenu-SecondaryAction_1dl4i Polaris-ActionMenu-SecondaryAction--newDesignLanguage_1rik8"><button class="Polaris-Button_r99lw Polaris-Button--newDesignLanguage_1rik8" type="button" onclick="Display_import()"><span class="Polaris-Button__Content_xd1mk"><span class="Polaris-Button__Text_yj3uv">Import</span></span></button></span></div>
                                                    </div>
                                                    </div>
                                                <div class="Polaris-Page-Header__PrimaryActionWrapper_w8or9"><a data-polaris-unstyled="true" class="Polaris-Button_r99lw Polaris-Button--newDesignLanguage_1rik8 Polaris-Button--primary_7k9zs"
                                                href="/add-product">
                                                    
                                                    <span class="Polaris-Button__Content_xd1mk"><span class="Polaris-Button__Text_yj3uv">Add product</span></span></a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="Polaris-Page__Content_xd1mk">
                                    <div class="Polaris-Card_yis1o Polaris-Card--newDesignLanguage_1rik8">
                                        <div>
                                            <div>
                                                <div class="Polaris-Tabs__Wrapper_mkrm3 Polaris-Tabs--newDesignLanguage_1rik8">
                                                    <ul role="tablist" class="Polaris-Tabs_yjc8o Polaris-Tabs--newDesignLanguage_1rik8">
                                                        <li class="Polaris-Tabs__TabContainer_dsj6d Polaris-Tabs--newDesignLanguage_1rik8" role="presentation"><a data-polaris-unstyled="true" id="all" role="tab" tabindex="0" class="Polaris-Tabs__Tab_375k2 Polaris-Tabs__Tab--selected_11sap" aria-selected="true" aria-controls="all-panel" aria-label="All" href="/product?view=all"><span class="Polaris-Tabs__Title_2qj8j Polaris-Tabs--newDesignLanguage_1rik8">All</span></a></li>
                                                        
                                                        <li class="Polaris-Tabs__DisclosureTab_1qbhg" role="presentation">
                                                            <div><button type="button" class="Polaris-Tabs__DisclosureActivator_1mita" aria-label="More tabs" tabindex="0" aria-controls="Polarispopover27" aria-owns="Polarispopover27" aria-expanded="false"><span class="Polaris-Tabs__Title_2qj8j"><span class="Polaris-Icon_yj27d Polaris-Icon--newDesignLanguage_1rik8"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                                                                                <path d="M6 10a2 2 0 1 1-4.001-.001A2 2 0 0 1 6 10zm6 0a2 2 0 1 1-4.001-.001A2 2 0 0 1 12 10zm6 0a2 2 0 1 1-4.001-.001A2 2 0 0 1 18 10z"></path>
                                                                            </svg></span></span></button></div>
                                                        </li>
                                                    </ul>
                                                    <div class="Polaris-Tabs_yjc8o Polaris-Tabs__TabMeasurer_1aget">
                                                        <li class="Polaris-Tabs__TabContainer_dsj6d Polaris-Tabs--newDesignLanguage_1rik8" role="presentation"><a data-polaris-unstyled="true" id="allMeasurer" role="tab" tabindex="-1" class="Polaris-Tabs__Tab_375k2 Polaris-Tabs__Tab--selected_11sap" aria-selected="true" href="#"><span class="Polaris-Tabs__Title_2qj8j Polaris-Tabs--newDesignLanguage_1rik8">All</span></a></li>
                                                        <li class="Polaris-Tabs__TabContainer_dsj6d Polaris-Tabs--newDesignLanguage_1rik8" role="presentation"><a data-polaris-unstyled="true" id="activeMeasurer" role="tab" tabindex="-1" class="Polaris-Tabs__Tab_375k2" aria-selected="false" href="/admin/products?selectedView=active&amp;status=ACTIVE"><span class="Polaris-Tabs__Title_2qj8j Polaris-Tabs--newDesignLanguage_1rik8">Active</span></a></li>
                                                        <li class="Polaris-Tabs__TabContainer_dsj6d Polaris-Tabs--newDesignLanguage_1rik8" role="presentation"><a data-polaris-unstyled="true" id="draftMeasurer" role="tab" tabindex="-1" class="Polaris-Tabs__Tab_375k2" aria-selected="false" href="/admin/products?selectedView=draft&amp;status=DRAFT"><span class="Polaris-Tabs__Title_2qj8j Polaris-Tabs--newDesignLanguage_1rik8">Draft</span></a></li>
                                                        <li class="Polaris-Tabs__TabContainer_dsj6d Polaris-Tabs--newDesignLanguage_1rik8" role="presentation"><a data-polaris-unstyled="true" id="archivedMeasurer" role="tab" tabindex="-1" class="Polaris-Tabs__Tab_375k2" aria-selected="false" href="/admin/products?selectedView=archived&amp;status=ARCHIVED"><span class="Polaris-Tabs__Title_2qj8j Polaris-Tabs--newDesignLanguage_1rik8">Archived</span></a></li>
                                                        <li class="Polaris-Tabs__TabContainer_dsj6d Polaris-Tabs--newDesignLanguage_1rik8" role="presentation"><a data-polaris-unstyled="true" id="gid://shopify/SavedSearch/1050486079537Measurer" role="tab" tabindex="-1" class="Polaris-Tabs__Tab_375k2" aria-selected="false" href="/admin/products?saved_search_id=1050486079537"><span class="Polaris-Tabs__Title_2qj8j Polaris-Tabs--newDesignLanguage_1rik8">Draft - Accessories</span></a></li><button type="button" class="Polaris-Tabs__DisclosureActivator_1mita" aria-label="More tabs"><span class="Polaris-Tabs__Title_2qj8j"><span class="Polaris-Icon_yj27d Polaris-Icon--newDesignLanguage_1rik8"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                                                                        <path d="M6 10a2 2 0 1 1-4.001-.001A2 2 0 0 1 6 10zm6 0a2 2 0 1 1-4.001-.001A2 2 0 0 1 12 10zm6 0a2 2 0 1 1-4.001-.001A2 2 0 0 1 18 10z"></path>
                                                                    </svg></span></span></button>
                                                    </div>
                                                </div>
                                            </div>
                                                                                               <div class="_1IUiv">

                                                    </div>
 <div class="_38s5j">
                                                <div class="_195sY">
                                                  <div class="_1IUiv">
                                                        <div class="_2wvZe">
                                                            <div class="Polaris-Filters_upqyz">
                                                                <div class="Polaris-Filters-ConnectedFilterControl__ProxyButtonContainer_1ydjk" aria-hidden="true">
                                                                    <div data-key="status"><button class="Polaris-Button_r99lw Polaris-Button--newDesignLanguage_1rik8" type="button"><span class="Polaris-Button__Content_xd1mk"><span class="Polaris-Button__Text_yj3uv">Status</span><span class="Polaris-Button__Icon_yj27d">
                                                                                    <div class="Polaris-Button__DisclosureIcon_j5n4l"><span class="Polaris-Icon_yj27d Polaris-Icon--newDesignLanguage_1rik8"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                                                                                                <path d="M5 8l5 5 5-5H5z"></path>
                                                                                            </svg></span></div>
                                                                                </span></span></button></div>
                                                                    <div data-key="financial_status"><button class="Polaris-Button_r99lw Polaris-Button--newDesignLanguage_1rik8" type="button"><span class="Polaris-Button__Content_xd1mk"><span class="Polaris-Button__Text_yj3uv">Payment status</span><span class="Polaris-Button__Icon_yj27d">
                                                                                    <div class="Polaris-Button__DisclosureIcon_j5n4l"><span class="Polaris-Icon_yj27d Polaris-Icon--newDesignLanguage_1rik8"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                                                                                                <path d="M5 8l5 5 5-5H5z"></path>
                                                                                            </svg></span></div>
                                                                                </span></span></button></div>
                                                                    <div data-key="fulfillment_status"><button class="Polaris-Button_r99lw Polaris-Button--newDesignLanguage_1rik8" type="button"><span class="Polaris-Button__Content_xd1mk"><span class="Polaris-Button__Text_yj3uv">Fulfillment status</span><span class="Polaris-Button__Icon_yj27d">
                                                                                    <div class="Polaris-Button__DisclosureIcon_j5n4l"><span class="Polaris-Icon_yj27d Polaris-Icon--newDesignLanguage_1rik8"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                                                                                                <path d="M5 8l5 5 5-5H5z"></path>
                                                                                            </svg></span></div>
                                                                                </span></span></button></div>
                                                                </div>
                                                                <div class="Polaris-Filters-ConnectedFilterControl__Wrapper_mkrm3">
                                                                    <div class="Polaris-Filters-ConnectedFilterControl_32yio Polaris-Filters-ConnectedFilterControl--right_312wf Polaris-Filters-ConnectedFilterControl--newDesignLanguage_1rik8">
                                                                        <div class="Polaris-Filters-ConnectedFilterControl__CenterContainer_kh80i">
                                                                            <div class="Polaris-Filters-ConnectedFilterControl__Item_yiyol">
                                                                                <div class="Polaris-Labelled--hidden_riqie">
                                                                                    <div class="Polaris-Labelled__LabelWrapper_bf6ys">
                                                                                        <div class="Polaris-Label_2vd36"><label id="PolarisTextField25Label" for="PolarisTextField25" class="Polaris-Label__Text_yj3uv">Filter Products</label></div>
                                                                                    </div>
                                                                                    <div class="Polaris-Connected_wopc9 Polaris-Connected--newDesignLanguage_1rik8">
                                                                                        <div class="Polaris-Connected__Item_yiyol Polaris-Connected__Item--primary_rmh5m">
                                                                                            <div class="Polaris-TextField_1spwi Polaris-TextField--newDesignLanguage_1rik8">
                                                                                                <div class="Polaris-TextField__Prefix_10fbz" id="PolarisTextField25Prefix"><span class="Polaris-Filters__SearchIcon_158og"><span class="Polaris-Icon_yj27d Polaris-Icon--newDesignLanguage_1rik8"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                                                                                                                <path d="M8 12a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm9.707 4.293l-4.82-4.82A5.968 5.968 0 0 0 14 8 6 6 0 0 0 2 8a6 6 0 0 0 6 6 5.968 5.968 0 0 0 3.473-1.113l4.82 4.82a.997.997 0 0 0 1.414 0 .999.999 0 0 0 0-1.414z"></path>
                                                                                                            </svg></span></span></div>
<input id="qk" name="q" type="text" placeholder="Filter Producs" class="Polaris-TextField__Input_30ock Polaris-TextField__Input--hasClearButton_15k6h" aria-labelledby="PolarisTextField25Label PolarisTextField25Prefix" aria-invalid="false" aria-multiline="false">
                                                                                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>    
                                                                                    <script>
                                                                                        $(document).ready(function(){
                                                                                            $("#qk").keyup(function(){
                                                                                                var query = $(this).val();
                                                                                                
                                                                                                    $.ajaxSetup({
                                                                                                    headers: {
                                                                                                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                                                                                    }
                                                                                                    })
                                                                                                    $.ajax({
                                                                                                        url:"",
                                                                                                        method:"get",
                                                                                                        data:{query:query},
                                                                                                        success:function(data){
                                                                                                            console.log(data)
                                                                                                            for (n=0; n<data.length; n++){
                                                                                                                 if(n==0)
                                                                                                                     $('#result').html(data[n]);
                                                                                                                 else
                                                                                                                     $('#result').append(data[n]);
                                                                                                                 }
                                                                                                            }                                                                                                                                                                                                             
                                                                                                    })
                                                                                                
                                                                                            });                                   
                                                                                        })
                                                                                        
                                                                                    </script>
                                                                                                <div class="Polaris-TextField__Backdrop_1x2i2"></div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="Polaris-Filters-ConnectedFilterControl__RightContainer_x3ra5">
                                                                            <div class="Polaris-Filters-ConnectedFilterControl__Item_yiyol">
                                                                                <div><button id="Activator-status" class="Polaris-Button_r99lw Polaris-Button--newDesignLanguage_1rik8" type="button" tabindex="0" aria-controls="Polarispopover147" aria-owns="Polarispopover147" aria-expanded="false" onclick="popshow()"><span class="Polaris-Button__Content_xd1mk"><span class="Polaris-Button__Text_yj3uv">Status</span><span class="Polaris-Button__Icon_yj27d">
                                                                                                <div class="Polaris-Button__DisclosureIcon_j5n4l"><span class="Polaris-Icon_yj27d Polaris-Icon--newDesignLanguage_1rik8"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                                                                                                            <path d="M5 8l5 5 5-5H5z"></path>
                                                                                                        </svg></span></div>
                                                                                            </span></span></button></div>
                                                                            </div>
                                                                        </div>
                                                                        <!--popover-->
                                                                        <div class="Polaris-Popover_mj4rb" id="Polaris-Popover_mj4rb" data-polaris-overlay="true" style="position: absolute; z-index: 20;right: 27%;top: 32px;visibility: hidden;">
    <div class="Polaris-Popover__FocusTracker_1y0x8" tabindex="0"></div>
    <div style="--p-background:rgba(246, 246, 247, 1); --p-background-hovered:rgba(241, 242, 243, 1); --p-background-pressed:rgba(237, 238, 239, 1); --p-background-selected:rgba(237, 238, 239, 1); --p-surface:rgba(255, 255, 255, 1); --p-surface-neutral:rgba(228, 229, 231, 1); --p-surface-neutral-hovered:rgba(219, 221, 223, 1); --p-surface-neutral-pressed:rgba(201, 204, 208, 1); --p-surface-neutral-disabled:rgba(241, 242, 243, 1); --p-surface-neutral-subdued:rgba(246, 246, 247, 1); --p-surface-subdued:rgba(250, 251, 251, 1); --p-surface-disabled:rgba(250, 251, 251, 1); --p-surface-hovered:rgba(246, 246, 247, 1); --p-surface-pressed:rgba(241, 242, 243, 1); --p-surface-depressed:rgba(237, 238, 239, 1); --p-backdrop:rgba(0, 0, 0, 0.5); --p-overlay:rgba(255, 255, 255, 0.5); --p-shadow-from-dim-light:rgba(0, 0, 0, 0.2); --p-shadow-from-ambient-light:rgba(23, 24, 24, 0.05); --p-shadow-from-direct-light:rgba(0, 0, 0, 0.15); --p-hint-from-direct-light:rgba(0, 0, 0, 0.15); --p-on-surface-background:rgba(241, 242, 243, 1); --p-border:rgba(140, 145, 150, 1); --p-border-neutral-subdued:rgba(186, 191, 195, 1); --p-border-hovered:rgba(153, 158, 164, 1); --p-border-disabled:rgba(210, 213, 216, 1); --p-border-subdued:rgba(201, 204, 207, 1); --p-border-depressed:rgba(87, 89, 89, 1); --p-border-shadow:rgba(174, 180, 185, 1); --p-border-shadow-subdued:rgba(186, 191, 196, 1); --p-divider:rgba(225, 227, 229, 1); --p-icon:rgba(92, 95, 98, 1); --p-icon-hovered:rgba(26, 28, 29, 1); --p-icon-pressed:rgba(68, 71, 74, 1); --p-icon-disabled:rgba(186, 190, 195, 1); --p-icon-subdued:rgba(140, 145, 150, 1); --p-text:rgba(32, 34, 35, 1); --p-text-disabled:rgba(140, 145, 150, 1); --p-text-subdued:rgba(109, 113, 117, 1); --p-interactive:rgba(44, 110, 203, 1); --p-interactive-disabled:rgba(189, 193, 204, 1); --p-interactive-hovered:rgba(31, 81, 153, 1); --p-interactive-pressed:rgba(16, 50, 98, 1); --p-focused:rgba(69, 143, 255, 1); --p-surface-selected:rgba(242, 247, 254, 1); --p-surface-selected-hovered:rgba(237, 244, 254, 1); --p-surface-selected-pressed:rgba(229, 239, 253, 1); --p-icon-on-interactive:rgba(255, 255, 255, 1); --p-text-on-interactive:rgba(255, 255, 255, 1); --p-action-secondary:rgba(255, 255, 255, 1); --p-action-secondary-disabled:rgba(255, 255, 255, 1); --p-action-secondary-hovered:rgba(246, 246, 247, 1); --p-action-secondary-pressed:rgba(241, 242, 243, 1); --p-action-secondary-depressed:rgba(109, 113, 117, 1); --p-action-primary:rgba(0, 128, 96, 1); --p-action-primary-disabled:rgba(241, 241, 241, 1); --p-action-primary-hovered:rgba(0, 110, 82, 1); --p-action-primary-pressed:rgba(0, 94, 70, 1); --p-action-primary-depressed:rgba(0, 61, 44, 1); --p-icon-on-primary:rgba(255, 255, 255, 1); --p-text-on-primary:rgba(255, 255, 255, 1); --p-surface-primary-selected:rgba(241, 248, 245, 1); --p-surface-primary-selected-hovered:rgba(179, 208, 195, 1); --p-surface-primary-selected-pressed:rgba(162, 188, 176, 1); --p-border-critical:rgba(253, 87, 73, 1); --p-border-critical-subdued:rgba(224, 179, 178, 1); --p-border-critical-disabled:rgba(255, 167, 163, 1); --p-icon-critical:rgba(215, 44, 13, 1); --p-surface-critical:rgba(254, 211, 209, 1); --p-surface-critical-subdued:rgba(255, 244, 244, 1); --p-surface-critical-subdued-hovered:rgba(255, 240, 240, 1); --p-surface-critical-subdued-pressed:rgba(255, 233, 232, 1); --p-surface-critical-subdued-depressed:rgba(254, 188, 185, 1); --p-text-critical:rgba(215, 44, 13, 1); --p-action-critical:rgba(216, 44, 13, 1); --p-action-critical-disabled:rgba(241, 241, 241, 1); --p-action-critical-hovered:rgba(188, 34, 0, 1); --p-action-critical-pressed:rgba(162, 27, 0, 1); --p-action-critical-depressed:rgba(108, 15, 0, 1); --p-icon-on-critical:rgba(255, 255, 255, 1); --p-text-on-critical:rgba(255, 255, 255, 1); --p-interactive-critical:rgba(216, 44, 13, 1); --p-interactive-critical-disabled:rgba(253, 147, 141, 1); --p-interactive-critical-hovered:rgba(205, 41, 12, 1); --p-interactive-critical-pressed:rgba(103, 15, 3, 1); --p-border-warning:rgba(185, 137, 0, 1); --p-border-warning-subdued:rgba(225, 184, 120, 1); --p-icon-warning:rgba(185, 137, 0, 1); --p-surface-warning:rgba(255, 215, 157, 1); --p-surface-warning-subdued:rgba(255, 245, 234, 1); --p-surface-warning-subdued-hovered:rgba(255, 242, 226, 1); --p-surface-warning-subdued-pressed:rgba(255, 235, 211, 1); --p-text-warning:rgba(145, 106, 0, 1); --p-border-highlight:rgba(68, 157, 167, 1); --p-border-highlight-subdued:rgba(152, 198, 205, 1); --p-icon-highlight:rgba(0, 160, 172, 1); --p-surface-highlight:rgba(164, 232, 242, 1); --p-surface-highlight-subdued:rgba(235, 249, 252, 1); --p-surface-highlight-subdued-hovered:rgba(228, 247, 250, 1); --p-surface-highlight-subdued-pressed:rgba(213, 243, 248, 1); --p-text-highlight:rgba(52, 124, 132, 1); --p-border-success:rgba(0, 164, 124, 1); --p-border-success-subdued:rgba(149, 201, 180, 1); --p-icon-success:rgba(0, 127, 95, 1); --p-surface-success:rgba(174, 233, 209, 1); --p-surface-success-subdued:rgba(241, 248, 245, 1); --p-surface-success-subdued-hovered:rgba(236, 246, 241, 1); --p-surface-success-subdued-pressed:rgba(226, 241, 234, 1); --p-text-success:rgba(0, 128, 96, 1); --p-decorative-one-icon:rgba(126, 87, 0, 1); --p-decorative-one-surface:rgba(255, 201, 107, 1); --p-decorative-one-text:rgba(61, 40, 0, 1); --p-decorative-two-icon:rgba(175, 41, 78, 1); --p-decorative-two-surface:rgba(255, 196, 176, 1); --p-decorative-two-text:rgba(73, 11, 28, 1); --p-decorative-three-icon:rgba(0, 109, 65, 1); --p-decorative-three-surface:rgba(146, 230, 181, 1); --p-decorative-three-text:rgba(0, 47, 25, 1); --p-decorative-four-icon:rgba(0, 106, 104, 1); --p-decorative-four-surface:rgba(145, 224, 214, 1); --p-decorative-four-text:rgba(0, 45, 45, 1); --p-decorative-five-icon:rgba(174, 43, 76, 1); --p-decorative-five-surface:rgba(253, 201, 208, 1); --p-decorative-five-text:rgba(79, 14, 31, 1); --p-border-radius-base:0.4rem; --p-border-radius-wide:0.8rem; --p-border-radius-full:50%; --p-card-shadow:0px 0px 5px var(--p-shadow-from-ambient-light), 0px 1px 2px var(--p-shadow-from-direct-light); --p-popover-shadow:-1px 0px 20px var(--p-shadow-from-ambient-light), 0px 1px 5px var(--p-shadow-from-direct-light); --p-modal-shadow:0px 26px 80px var(--p-shadow-from-dim-light), 0px 0px 1px var(--p-shadow-from-dim-light); --p-top-bar-shadow:0 2px 2px -1px var(--p-shadow-from-direct-light); --p-button-drop-shadow:0 1px 0 rgba(0, 0, 0, 0.05); --p-button-inner-shadow:inset 0 -1px 0 rgba(0, 0, 0, 0.2); --p-button-pressed-inner-shadow:inset 0 1px 0 rgba(0, 0, 0, 0.15); --p-override-none:none; --p-override-transparent:transparent; --p-override-one:1; --p-override-visible:visible; --p-override-zero:0; --p-override-loading-z-index:514; --p-button-font-weight:500; --p-non-null-content:&quot;&quot;; --p-choice-size:2rem; --p-icon-size:1rem; --p-choice-margin:0.1rem; --p-control-border-width:0.2rem; --p-banner-border-default:inset 0 0.1rem 0 0 var(--p-border-neutral-subdued), inset 0 0 0 0.1rem var(--p-border-neutral-subdued); --p-banner-border-success:inset 0 0.1rem 0 0 var(--p-border-success-subdued), inset 0 0 0 0.1rem var(--p-border-success-subdued); --p-banner-border-highlight:inset 0 0.1rem 0 0 var(--p-border-highlight-subdued), inset 0 0 0 0.1rem var(--p-border-highlight-subdued); --p-banner-border-warning:inset 0 0.1rem 0 0 var(--p-border-warning-subdued), inset 0 0 0 0.1rem var(--p-border-warning-subdued); --p-banner-border-critical:inset 0 0.1rem 0 0 var(--p-border-critical-subdued), inset 0 0 0 0.1rem var(--p-border-critical-subdued); --p-badge-mix-blend-mode:luminosity; --p-thin-border-subdued:0.1rem solid var(--p-border-subdued); --p-text-field-spinner-offset:0.2rem; --p-text-field-focus-ring-offset:-0.4rem; --p-text-field-focus-ring-border-radius:0.7rem; --p-button-group-item-spacing:-0.1rem; --p-duration-1-0-0:100ms; --p-duration-1-5-0:150ms; --p-ease-in:cubic-bezier(0.5, 0.1, 1, 1); --p-ease:cubic-bezier(0.4, 0.22, 0.28, 1); --p-range-slider-thumb-size-base:1.6rem; --p-range-slider-thumb-size-active:2.4rem; --p-range-slider-thumb-scale:1.5; --p-badge-font-weight:400; --p-frame-offset:0px; color: rgb(32, 34, 35);">
        <div class="Polaris-Popover__Wrapper_mkrm3">
            <div id="Polarispopover76" tabindex="-1" class="Polaris-Popover__Content_xd1mk" style="height: 146px;">
                <div class="Polaris-Popover__Pane_yisof Polaris-Scrollable_1ed9o Polaris-Scrollable--vertical_uiuuj" data-polaris-scrollable="true">
                    <div class="Polaris-Popover__Section_1b1h1">
                        <div>
                            <div class="Polaris-Stack_32wu2 Polaris-Stack--vertical_uiuuj Polaris-Stack--spacingTight_1o4d6">
                                <div class="Polaris-Stack__Item_yiyol">
                                    <fieldset class="Polaris-ChoiceList_ygfuw Polaris-ChoiceList--titleHidden_14zrw" id="status" aria-invalid="false">
                                        <ul class="Polaris-ChoiceList__Choices_15o76">
                                            <li><label class="Polaris-Choice_j5gzq" for="PolarisRadioButton1"><span class="Polaris-Choice__Control_1u8vs"><span class="Polaris-RadioButton_bsatr Polaris-RadioButton--newDesignLanguage_1rik8"><input id="PolarisRadioButton1" name="status" type="radio" class="Polaris-RadioButton__Input_30ock" value="open"><span class="Polaris-RadioButton__Backdrop_1x2i2"></span></span></span><span class="Polaris-Choice__Label_2vd36">
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;">Open</font>
                                                        </font>
                                                    </span></label></li>
                                            <li><label class="Polaris-Choice_j5gzq" for="PolarisRadioButton2"><span class="Polaris-Choice__Control_1u8vs"><span class="Polaris-RadioButton_bsatr Polaris-RadioButton--newDesignLanguage_1rik8"><input id="PolarisRadioButton2" name="status" type="radio" class="Polaris-RadioButton__Input_30ock" value="closed"><span class="Polaris-RadioButton__Backdrop_1x2i2"></span></span></span><span class="Polaris-Choice__Label_2vd36">
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;">Filed</font>
                                                        </font>
                                                    </span></label></li>
                                            <li><label class="Polaris-Choice_j5gzq" for="PolarisRadioButton3"><span class="Polaris-Choice__Control_1u8vs"><span class="Polaris-RadioButton_bsatr Polaris-RadioButton--newDesignLanguage_1rik8"><input id="PolarisRadioButton3" name="status" type="radio" class="Polaris-RadioButton__Input_30ock" value="cancelled"><span class="Polaris-RadioButton__Backdrop_1x2i2"></span></span></span><span class="Polaris-Choice__Label_2vd36">
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;">Canceled</font>
                                                        </font>
                                                    </span></label></li>
                                        </ul>
                                    </fieldset>
                                </div>
                                <div class="Polaris-Stack__Item_yiyol"><button class="Polaris-Button_r99lw Polaris-Button--newDesignLanguage_1rik8  Polaris-Button--plain_2z97r" aria-label="Clear State" type="button" onclick="popclose()"><span class="Polaris-Button__Content_xd1mk"><span class="Polaris-Button__Text_yj3uv">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Cancel</font>
                                                </font>
                                            </span></span></button></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="Polaris-Popover__FocusTracker_1y0x8" tabindex="0"></div>
</div>
                                                                        <!--popover-->
<div class="Polaris-Filters-ConnectedFilterControl__MoreFiltersButtonContainer_2yy0r">
    <div class="Polaris-Filters-ConnectedFilterControl__Item_yiyol">
        <div><button class="Polaris-Button_r99lw Polaris-Button--newDesignLanguage_1rik8" type="button" onclick="moremenu()"><span class="Polaris-Button__Content_xd1mk"><span class="Polaris-Button__Text_yj3uv">More filters</span></span></button></div>
    </div>
</div>
</div>
<!--More Filters-->
<div class="Polaris-Sheet__Container_13mbo" id="Polaris-Sheet__Container_13mbo" data-polaris-layer="true" data-polaris-overlay="true" style="visibility: hidden;">
    <div>
        <div role="dialog" tabindex="-1" class="Polaris-Sheet_310da">
            <div class="Polaris-Filters__FiltersContainer_qz0bo">
                <div class="Polaris-Filters__FiltersContainerHeader_c0kst Polaris-Filters--newDesignLanguage_1rik8">
                    <h3 class="Polaris-DisplayText_1u0t8 Polaris-DisplayText--sizeSmall_7647q">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">More filters</font>
                        </font>
                    </h3><button class="Polaris-Button_r99lw Polaris-Button--newDesignLanguage_1rik8 Polaris-Button--plain_2z97r Polaris-Button--iconOnly_viazp" aria-label="Cancel" type="button" onclick="lessmenu()"><span class="Polaris-Button__Content_xd1mk"><span class="Polaris-Button__Icon_yj27d"><span class="Polaris-Icon_yj27d Polaris-Icon--newDesignLanguage_1rik8"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                                        <path d="M11.414 10l4.293-4.293a.999.999 0 1 0-1.414-1.414L10 8.586 5.707 4.293a.999.999 0 1 0-1.414 1.414L8.586 10l-4.293 4.293a.999.999 0 1 0 1.414 1.414L10 11.414l4.293 4.293a.997.997 0 0 0 1.414 0 .999.999 0 0 0 0-1.414L11.414 10z"></path>
                                    </svg></span></span></span></button>
                </div>
                <div class="Polaris-Filters__FiltersDesktopContainerContent_1vjuq Polaris-Filters--newDesignLanguage_1rik8 Polaris-Scrollable_1ed9o Polaris-Scrollable--vertical_uiuuj Polaris-Scrollable--hasBottomShadow_all2n Polaris-Scrollable--verticalHasScrolling_1n2r8" data-polaris-scrollable="true">
                    <div class="Polaris-Filters__FilterTriggerContainer_w27xp Polaris-Filters--open_yj2jb Polaris-Filters--first_30jv6"><button class="Polaris-Filters__FilterTrigger_60gd4 Polaris-Filters--newDesignLanguage_1rik8" id="delivery_methodToggleButton" type="button" aria-controls="delivery_methodCollapsible" aria-expanded="true">
                            <div class="Polaris-Filters__FilterTriggerLabelContainer_gnr9n">
                                <h3 class="Polaris-Filters__FilterTriggerTitle_lbjb0"><span class="">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">Delivery method</font>
                                        </font>
                                    </span></h3><span><span class="Polaris-Icon_yj27d Polaris-Icon--colorInkLightest_1awo8 Polaris-Icon--isColored_uhqnf Polaris-Icon--newDesignLanguage_1rik8"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                                            <path d="M15 13a.997.997 0 0 1-.707-.293L10 8.414l-4.293 4.293a.999.999 0 1 1-1.414-1.414l5-5a.999.999 0 0 1 1.414 0l5 5A.999.999 0 0 1 15 13z"></path>
                                        </svg></span></span>
                            </div>
                        </button>
                        <div id="delivery_methodCollapsible" aria-hidden="false" class="Polaris-Collapsible_1dqql Polaris-Collapsible--open_yj2jb Polaris-Collapsible--fullyOpen_1dxny" style="max-height: none;">
                            <div>
                                <div class="Polaris-Filters__FilterNodeContainer_18d1s">
                                    <div>
                                        <div class="Polaris-Stack_32wu2 Polaris-Stack--vertical_uiuuj Polaris-Stack--spacingTight_1o4d6">
                                            <div class="Polaris-Stack__Item_yiyol">
                                                <fieldset class="Polaris-ChoiceList_ygfuw Polaris-ChoiceList--titleHidden_14zrw" id="delivery_method[]" aria-invalid="false">
                                                    <ul class="Polaris-ChoiceList__Choices_15o76">
                                                        <li><label class="Polaris-Choice_j5gzq" for="PolarisCheckbox10"><span class="Polaris-Choice__Control_1u8vs"><span class="Polaris-Checkbox_1d6zr Polaris-Checkbox--newDesignLanguage_1rik8"><input id="PolarisCheckbox10" name="delivery_method[]" type="checkbox" class="Polaris-Checkbox__Input_30ock" aria-invalid="false" role="checkbox" aria-checked="false" value="local"><span class="Polaris-Checkbox__Backdrop_1x2i2"></span><span class="Polaris-Checkbox__Icon_yj27d"><span class="Polaris-Icon_yj27d Polaris-Icon--newDesignLanguage_1rik8"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                                                                                    <path d="M8.315 13.859l-3.182-3.417a.506.506 0 0 1 0-.684l.643-.683a.437.437 0 0 1 .642 0l2.22 2.393 4.942-5.327a.436.436 0 0 1 .643 0l.643.684a.504.504 0 0 1 0 .683l-5.91 6.35a.437.437 0 0 1-.642 0"></path>
                                                                                </svg></span></span></span></span><span class="Polaris-Choice__Label_2vd36">
                                                                    <font style="vertical-align: inherit;">
                                                                        <font style="vertical-align: inherit;">Local delivery</font>
                                                                    </font>
                                                                </span></label></li>
                                                        <li><label class="Polaris-Choice_j5gzq" for="PolarisCheckbox11"><span class="Polaris-Choice__Control_1u8vs"><span class="Polaris-Checkbox_1d6zr Polaris-Checkbox--newDesignLanguage_1rik8"><input id="PolarisCheckbox11" name="delivery_method[]" type="checkbox" class="Polaris-Checkbox__Input_30ock" aria-invalid="false" role="checkbox" aria-checked="false" value="pick-up"><span class="Polaris-Checkbox__Backdrop_1x2i2"></span><span class="Polaris-Checkbox__Icon_yj27d"><span class="Polaris-Icon_yj27d Polaris-Icon--newDesignLanguage_1rik8"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                                                                                    <path d="M8.315 13.859l-3.182-3.417a.506.506 0 0 1 0-.684l.643-.683a.437.437 0 0 1 .642 0l2.22 2.393 4.942-5.327a.436.436 0 0 1 .643 0l.643.684a.504.504 0 0 1 0 .683l-5.91 6.35a.437.437 0 0 1-.642 0"></path>
                                                                                </svg></span></span></span></span><span class="Polaris-Choice__Label_2vd36">
                                                                    <font style="vertical-align: inherit;">
                                                                        <font style="vertical-align: inherit;">Local pickup</font>
                                                                    </font>
                                                                </span></label></li>
                                                        <li><label class="Polaris-Choice_j5gzq" for="PolarisCheckbox12"><span class="Polaris-Choice__Control_1u8vs"><span class="Polaris-Checkbox_1d6zr Polaris-Checkbox--newDesignLanguage_1rik8"><input id="PolarisCheckbox12" name="delivery_method[]" type="checkbox" class="Polaris-Checkbox__Input_30ock" aria-invalid="false" role="checkbox" aria-checked="false" value="shipping"><span class="Polaris-Checkbox__Backdrop_1x2i2"></span><span class="Polaris-Checkbox__Icon_yj27d"><span class="Polaris-Icon_yj27d Polaris-Icon--newDesignLanguage_1rik8"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                                                                                    <path d="M8.315 13.859l-3.182-3.417a.506.506 0 0 1 0-.684l.643-.683a.437.437 0 0 1 .642 0l2.22 2.393 4.942-5.327a.436.436 0 0 1 .643 0l.643.684a.504.504 0 0 1 0 .683l-5.91 6.35a.437.437 0 0 1-.642 0"></path>
                                                                                </svg></span></span></span></span><span class="Polaris-Choice__Label_2vd36">
                                                                    <font style="vertical-align: inherit;">
                                                                        <font style="vertical-align: inherit;">Shipping to the customer</font>
                                                                    </font>
                                                                </span></label></li>
                                                    </ul>
                                                </fieldset>
                                            </div>
                                            <div class="Polaris-Stack__Item_yiyol"><button class="Polaris-Button_r99lw Polaris-Button--newDesignLanguage_1rik8 Polaris-Button--disabled_hcuh9 Polaris-Button--plain_2z97r" aria-label="Cancel Delivery Method" type="button" disabled=""><span class="Polaris-Button__Content_xd1mk"><span class="Polaris-Button__Text_yj3uv">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">Cancel</font>
                                                            </font>
                                                        </span></span></button></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="Polaris-Filters__FilterTriggerContainer_w27xp Polaris-Filters--open_yj2jb"><button class="Polaris-Filters__FilterTrigger_60gd4 Polaris-Filters--newDesignLanguage_1rik8" id="statusToggleButton" type="button" aria-controls="statusCollapsible" aria-expanded="true">
                            <div class="Polaris-Filters__FilterTriggerLabelContainer_gnr9n">
                                <h3 class="Polaris-Filters__FilterTriggerTitle_lbjb0"><span class="">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">State</font>
                                        </font>
                                    </span></h3><span><span class="Polaris-Icon_yj27d Polaris-Icon--colorInkLightest_1awo8 Polaris-Icon--isColored_uhqnf Polaris-Icon--newDesignLanguage_1rik8"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                                            <path d="M15 13a.997.997 0 0 1-.707-.293L10 8.414l-4.293 4.293a.999.999 0 1 1-1.414-1.414l5-5a.999.999 0 0 1 1.414 0l5 5A.999.999 0 0 1 15 13z"></path>
                                        </svg></span></span>
                            </div>
                        </button>
                        <div id="statusCollapsible" aria-hidden="false" class="Polaris-Collapsible_1dqql Polaris-Collapsible--open_yj2jb Polaris-Collapsible--fullyOpen_1dxny" style="max-height: none;">
                            <div>
                                <div class="Polaris-Filters__FilterNodeContainer_18d1s">
                                    <div>
                                        <div class="Polaris-Stack_32wu2 Polaris-Stack--vertical_uiuuj Polaris-Stack--spacingTight_1o4d6">
                                            <div class="Polaris-Stack__Item_yiyol">
                                                <fieldset class="Polaris-ChoiceList_ygfuw Polaris-ChoiceList--titleHidden_14zrw" id="status" aria-invalid="false">
                                                    <ul class="Polaris-ChoiceList__Choices_15o76">
                                                        <li><label class="Polaris-Choice_j5gzq" for="PolarisRadioButton16"><span class="Polaris-Choice__Control_1u8vs"><span class="Polaris-RadioButton_bsatr Polaris-RadioButton--newDesignLanguage_1rik8"><input id="PolarisRadioButton16" name="status" type="radio" class="Polaris-RadioButton__Input_30ock" value="open"><span class="Polaris-RadioButton__Backdrop_1x2i2"></span></span></span><span class="Polaris-Choice__Label_2vd36">
                                                                    <font style="vertical-align: inherit;">
                                                                        <font style="vertical-align: inherit;">Open</font>
                                                                    </font>
                                                                </span></label></li>
                                                        <li><label class="Polaris-Choice_j5gzq" for="PolarisRadioButton17"><span class="Polaris-Choice__Control_1u8vs"><span class="Polaris-RadioButton_bsatr Polaris-RadioButton--newDesignLanguage_1rik8"><input id="PolarisRadioButton17" name="status" type="radio" class="Polaris-RadioButton__Input_30ock" value="closed"><span class="Polaris-RadioButton__Backdrop_1x2i2"></span></span></span><span class="Polaris-Choice__Label_2vd36">
                                                                    <font style="vertical-align: inherit;">
                                                                        <font style="vertical-align: inherit;">Filed</font>
                                                                    </font>
                                                                </span></label></li>
                                                        <li><label class="Polaris-Choice_j5gzq" for="PolarisRadioButton18"><span class="Polaris-Choice__Control_1u8vs"><span class="Polaris-RadioButton_bsatr Polaris-RadioButton--newDesignLanguage_1rik8"><input id="PolarisRadioButton18" name="status" type="radio" class="Polaris-RadioButton__Input_30ock" value="cancelled"><span class="Polaris-RadioButton__Backdrop_1x2i2"></span></span></span><span class="Polaris-Choice__Label_2vd36">
                                                                    <font style="vertical-align: inherit;">
                                                                        <font style="vertical-align: inherit;">Canceled</font>
                                                                    </font>
                                                                </span></label></li>
                                                    </ul>
                                                </fieldset>
                                            </div>
                                            <div class="Polaris-Stack__Item_yiyol"><button class="Polaris-Button_r99lw Polaris-Button--newDesignLanguage_1rik8 Polaris-Button--disabled_hcuh9 Polaris-Button--plain_2z97r" aria-label="Clear State" type="button" disabled=""><span class="Polaris-Button__Content_xd1mk"><span class="Polaris-Button__Text_yj3uv">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">Cancel</font>
                                                            </font>
                                                        </span></span></button></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="Polaris-Filters__FilterTriggerContainer_w27xp Polaris-Filters--open_yj2jb"><button class="Polaris-Filters__FilterTrigger_60gd4 Polaris-Filters--newDesignLanguage_1rik8" id="financial_statusToggleButton" type="button" aria-controls="financial_statusCollapsible" aria-expanded="true">
                            <div class="Polaris-Filters__FilterTriggerLabelContainer_gnr9n">
                                <h3 class="Polaris-Filters__FilterTriggerTitle_lbjb0"><span class="">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">Payment status</font>
                                        </font>
                                    </span></h3><span><span class="Polaris-Icon_yj27d Polaris-Icon--colorInkLightest_1awo8 Polaris-Icon--isColored_uhqnf Polaris-Icon--newDesignLanguage_1rik8"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                                            <path d="M15 13a.997.997 0 0 1-.707-.293L10 8.414l-4.293 4.293a.999.999 0 1 1-1.414-1.414l5-5a.999.999 0 0 1 1.414 0l5 5A.999.999 0 0 1 15 13z"></path>
                                        </svg></span></span>
                            </div>
                        </button>
                        <div id="financial_statusCollapsible" aria-hidden="false" class="Polaris-Collapsible_1dqql Polaris-Collapsible--open_yj2jb Polaris-Collapsible--fullyOpen_1dxny" style="max-height: none;">
                            <div>
                                <div class="Polaris-Filters__FilterNodeContainer_18d1s">
                                    <div>
                                        <div class="Polaris-Stack_32wu2 Polaris-Stack--vertical_uiuuj Polaris-Stack--spacingTight_1o4d6">
                                            <div class="Polaris-Stack__Item_yiyol">
                                                <fieldset class="Polaris-ChoiceList_ygfuw Polaris-ChoiceList--titleHidden_14zrw" id="financial_status[]" aria-invalid="false">
                                                    <ul class="Polaris-ChoiceList__Choices_15o76">
                                                        <li><label class="Polaris-Choice_j5gzq" for="PolarisCheckbox13"><span class="Polaris-Choice__Control_1u8vs"><span class="Polaris-Checkbox_1d6zr Polaris-Checkbox--newDesignLanguage_1rik8"><input id="PolarisCheckbox13" name="financial_status[]" type="checkbox" class="Polaris-Checkbox__Input_30ock" aria-invalid="false" role="checkbox" aria-checked="false" value="authorized"><span class="Polaris-Checkbox__Backdrop_1x2i2"></span><span class="Polaris-Checkbox__Icon_yj27d"><span class="Polaris-Icon_yj27d Polaris-Icon--newDesignLanguage_1rik8"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                                                                                    <path d="M8.315 13.859l-3.182-3.417a.506.506 0 0 1 0-.684l.643-.683a.437.437 0 0 1 .642 0l2.22 2.393 4.942-5.327a.436.436 0 0 1 .643 0l.643.684a.504.504 0 0 1 0 .683l-5.91 6.35a.437.437 0 0 1-.642 0"></path>
                                                                                </svg></span></span></span></span><span class="Polaris-Choice__Label_2vd36">
                                                                    <font style="vertical-align: inherit;">
                                                                        <font style="vertical-align: inherit;">Authorized</font>
                                                                    </font>
                                                                </span></label></li>
                                                        <li><label class="Polaris-Choice_j5gzq" for="PolarisCheckbox14"><span class="Polaris-Choice__Control_1u8vs"><span class="Polaris-Checkbox_1d6zr Polaris-Checkbox--newDesignLanguage_1rik8"><input id="PolarisCheckbox14" name="financial_status[]" type="checkbox" class="Polaris-Checkbox__Input_30ock" aria-invalid="false" role="checkbox" aria-checked="false" value="paid"><span class="Polaris-Checkbox__Backdrop_1x2i2"></span><span class="Polaris-Checkbox__Icon_yj27d"><span class="Polaris-Icon_yj27d Polaris-Icon--newDesignLanguage_1rik8"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                                                                                    <path d="M8.315 13.859l-3.182-3.417a.506.506 0 0 1 0-.684l.643-.683a.437.437 0 0 1 .642 0l2.22 2.393 4.942-5.327a.436.436 0 0 1 .643 0l.643.684a.504.504 0 0 1 0 .683l-5.91 6.35a.437.437 0 0 1-.642 0"></path>
                                                                                </svg></span></span></span></span><span class="Polaris-Choice__Label_2vd36">
                                                                    <font style="vertical-align: inherit;">
                                                                        <font style="vertical-align: inherit;">Paid</font>
                                                                    </font>
                                                                </span></label></li>
                                                        <li><label class="Polaris-Choice_j5gzq" for="PolarisCheckbox15"><span class="Polaris-Choice__Control_1u8vs"><span class="Polaris-Checkbox_1d6zr Polaris-Checkbox--newDesignLanguage_1rik8"><input id="PolarisCheckbox15" name="financial_status[]" type="checkbox" class="Polaris-Checkbox__Input_30ock" aria-invalid="false" role="checkbox" aria-checked="false" value="partially_refunded"><span class="Polaris-Checkbox__Backdrop_1x2i2"></span><span class="Polaris-Checkbox__Icon_yj27d"><span class="Polaris-Icon_yj27d Polaris-Icon--newDesignLanguage_1rik8"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                                                                                    <path d="M8.315 13.859l-3.182-3.417a.506.506 0 0 1 0-.684l.643-.683a.437.437 0 0 1 .642 0l2.22 2.393 4.942-5.327a.436.436 0 0 1 .643 0l.643.684a.504.504 0 0 1 0 .683l-5.91 6.35a.437.437 0 0 1-.642 0"></path>
                                                                                </svg></span></span></span></span><span class="Polaris-Choice__Label_2vd36">
                                                                    <font style="vertical-align: inherit;">
                                                                        <font style="vertical-align: inherit;">Partially refunded</font>
                                                                    </font>
                                                                </span></label></li>
                                                        <li><label class="Polaris-Choice_j5gzq" for="PolarisCheckbox16"><span class="Polaris-Choice__Control_1u8vs"><span class="Polaris-Checkbox_1d6zr Polaris-Checkbox--newDesignLanguage_1rik8"><input id="PolarisCheckbox16" name="financial_status[]" type="checkbox" class="Polaris-Checkbox__Input_30ock" aria-invalid="false" role="checkbox" aria-checked="false" value="partially_paid"><span class="Polaris-Checkbox__Backdrop_1x2i2"></span><span class="Polaris-Checkbox__Icon_yj27d"><span class="Polaris-Icon_yj27d Polaris-Icon--newDesignLanguage_1rik8"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                                                                                    <path d="M8.315 13.859l-3.182-3.417a.506.506 0 0 1 0-.684l.643-.683a.437.437 0 0 1 .642 0l2.22 2.393 4.942-5.327a.436.436 0 0 1 .643 0l.643.684a.504.504 0 0 1 0 .683l-5.91 6.35a.437.437 0 0 1-.642 0"></path>
                                                                                </svg></span></span></span></span><span class="Polaris-Choice__Label_2vd36">
                                                                    <font style="vertical-align: inherit;">
                                                                        <font style="vertical-align: inherit;">Partially paid</font>
                                                                    </font>
                                                                </span></label></li>
                                                        <li><label class="Polaris-Choice_j5gzq" for="PolarisCheckbox17"><span class="Polaris-Choice__Control_1u8vs"><span class="Polaris-Checkbox_1d6zr Polaris-Checkbox--newDesignLanguage_1rik8"><input id="PolarisCheckbox17" name="financial_status[]" type="checkbox" class="Polaris-Checkbox__Input_30ock" aria-invalid="false" role="checkbox" aria-checked="false" value="pending"><span class="Polaris-Checkbox__Backdrop_1x2i2"></span><span class="Polaris-Checkbox__Icon_yj27d"><span class="Polaris-Icon_yj27d Polaris-Icon--newDesignLanguage_1rik8"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                                                                                    <path d="M8.315 13.859l-3.182-3.417a.506.506 0 0 1 0-.684l.643-.683a.437.437 0 0 1 .642 0l2.22 2.393 4.942-5.327a.436.436 0 0 1 .643 0l.643.684a.504.504 0 0 1 0 .683l-5.91 6.35a.437.437 0 0 1-.642 0"></path>
                                                                                </svg></span></span></span></span><span class="Polaris-Choice__Label_2vd36">
                                                                    <font style="vertical-align: inherit;">
                                                                        <font style="vertical-align: inherit;">In progress</font>
                                                                    </font>
                                                                </span></label></li>
                                                        <li><label class="Polaris-Choice_j5gzq" for="PolarisCheckbox18"><span class="Polaris-Choice__Control_1u8vs"><span class="Polaris-Checkbox_1d6zr Polaris-Checkbox--newDesignLanguage_1rik8"><input id="PolarisCheckbox18" name="financial_status[]" type="checkbox" class="Polaris-Checkbox__Input_30ock" aria-invalid="false" role="checkbox" aria-checked="false" value="refunded"><span class="Polaris-Checkbox__Backdrop_1x2i2"></span><span class="Polaris-Checkbox__Icon_yj27d"><span class="Polaris-Icon_yj27d Polaris-Icon--newDesignLanguage_1rik8"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                                                                                    <path d="M8.315 13.859l-3.182-3.417a.506.506 0 0 1 0-.684l.643-.683a.437.437 0 0 1 .642 0l2.22 2.393 4.942-5.327a.436.436 0 0 1 .643 0l.643.684a.504.504 0 0 1 0 .683l-5.91 6.35a.437.437 0 0 1-.642 0"></path>
                                                                                </svg></span></span></span></span><span class="Polaris-Choice__Label_2vd36">
                                                                    <font style="vertical-align: inherit;">
                                                                        <font style="vertical-align: inherit;">Refunded</font>
                                                                    </font>
                                                                </span></label></li>
                                                        <li><label class="Polaris-Choice_j5gzq" for="PolarisCheckbox19"><span class="Polaris-Choice__Control_1u8vs"><span class="Polaris-Checkbox_1d6zr Polaris-Checkbox--newDesignLanguage_1rik8"><input id="PolarisCheckbox19" name="financial_status[]" type="checkbox" class="Polaris-Checkbox__Input_30ock" aria-invalid="false" role="checkbox" aria-checked="false" value="unpaid"><span class="Polaris-Checkbox__Backdrop_1x2i2"></span><span class="Polaris-Checkbox__Icon_yj27d"><span class="Polaris-Icon_yj27d Polaris-Icon--newDesignLanguage_1rik8"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                                                                                    <path d="M8.315 13.859l-3.182-3.417a.506.506 0 0 1 0-.684l.643-.683a.437.437 0 0 1 .642 0l2.22 2.393 4.942-5.327a.436.436 0 0 1 .643 0l.643.684a.504.504 0 0 1 0 .683l-5.91 6.35a.437.437 0 0 1-.642 0"></path>
                                                                                </svg></span></span></span></span><span class="Polaris-Choice__Label_2vd36">
                                                                    <font style="vertical-align: inherit;">
                                                                        <font style="vertical-align: inherit;">Unpaid</font>
                                                                    </font>
                                                                </span></label></li>
                                                        <li><label class="Polaris-Choice_j5gzq" for="PolarisCheckbox20"><span class="Polaris-Choice__Control_1u8vs"><span class="Polaris-Checkbox_1d6zr Polaris-Checkbox--newDesignLanguage_1rik8"><input id="PolarisCheckbox20" name="financial_status[]" type="checkbox" class="Polaris-Checkbox__Input_30ock" aria-invalid="false" role="checkbox" aria-checked="false" value="voided"><span class="Polaris-Checkbox__Backdrop_1x2i2"></span><span class="Polaris-Checkbox__Icon_yj27d"><span class="Polaris-Icon_yj27d Polaris-Icon--newDesignLanguage_1rik8"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                                                                                    <path d="M8.315 13.859l-3.182-3.417a.506.506 0 0 1 0-.684l.643-.683a.437.437 0 0 1 .642 0l2.22 2.393 4.942-5.327a.436.436 0 0 1 .643 0l.643.684a.504.504 0 0 1 0 .683l-5.91 6.35a.437.437 0 0 1-.642 0"></path>
                                                                                </svg></span></span></span></span><span class="Polaris-Choice__Label_2vd36">
                                                                    <font style="vertical-align: inherit;">
                                                                        <font style="vertical-align: inherit;">Canceled</font>
                                                                    </font>
                                                                </span></label></li>
                                                    </ul>
                                                </fieldset>
                                            </div>
                                            <div class="Polaris-Stack__Item_yiyol"><button class="Polaris-Button_r99lw Polaris-Button--newDesignLanguage_1rik8 Polaris-Button--disabled_hcuh9 Polaris-Button--plain_2z97r" aria-label="Cancel Payment status" type="button" disabled=""><span class="Polaris-Button__Content_xd1mk"><span class="Polaris-Button__Text_yj3uv">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">Cancel</font>
                                                            </font>
                                                        </span></span></button></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="Polaris-Filters__FilterTriggerContainer_w27xp Polaris-Filters--open_yj2jb"><button class="Polaris-Filters__FilterTrigger_60gd4 Polaris-Filters--newDesignLanguage_1rik8" id="fulfillment_statusToggleButton" type="button" aria-controls="fulfillment_statusCollapsible" aria-expanded="true">
                            <div class="Polaris-Filters__FilterTriggerLabelContainer_gnr9n">
                                <h3 class="Polaris-Filters__FilterTriggerTitle_lbjb0"><span class="">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">Order fulfillment status</font>
                                        </font>
                                    </span></h3><span><span class="Polaris-Icon_yj27d Polaris-Icon--colorInkLightest_1awo8 Polaris-Icon--isColored_uhqnf Polaris-Icon--newDesignLanguage_1rik8"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                                            <path d="M15 13a.997.997 0 0 1-.707-.293L10 8.414l-4.293 4.293a.999.999 0 1 1-1.414-1.414l5-5a.999.999 0 0 1 1.414 0l5 5A.999.999 0 0 1 15 13z"></path>
                                        </svg></span></span>
                            </div>
                        </button>
                        <div id="fulfillment_statusCollapsible" aria-hidden="false" class="Polaris-Collapsible_1dqql Polaris-Collapsible--open_yj2jb Polaris-Collapsible--fullyOpen_1dxny" style="max-height: none;">
                            <div>
                                <div class="Polaris-Filters__FilterNodeContainer_18d1s">
                                    <div>
                                        <div class="Polaris-Stack_32wu2 Polaris-Stack--vertical_uiuuj Polaris-Stack--spacingTight_1o4d6">
                                            <div class="Polaris-Stack__Item_yiyol">
                                                <fieldset class="Polaris-ChoiceList_ygfuw Polaris-ChoiceList--titleHidden_14zrw" id="fulfillment_status[]" aria-invalid="false">
                                                    <ul class="Polaris-ChoiceList__Choices_15o76">
                                                        <li><label class="Polaris-Choice_j5gzq" for="PolarisCheckbox21"><span class="Polaris-Choice__Control_1u8vs"><span class="Polaris-Checkbox_1d6zr Polaris-Checkbox--newDesignLanguage_1rik8"><input id="PolarisCheckbox21" name="fulfillment_status[]" type="checkbox" class="Polaris-Checkbox__Input_30ock" aria-invalid="false" role="checkbox" aria-checked="false" value="shipped"><span class="Polaris-Checkbox__Backdrop_1x2i2"></span><span class="Polaris-Checkbox__Icon_yj27d"><span class="Polaris-Icon_yj27d Polaris-Icon--newDesignLanguage_1rik8"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                                                                                    <path d="M8.315 13.859l-3.182-3.417a.506.506 0 0 1 0-.684l.643-.683a.437.437 0 0 1 .642 0l2.22 2.393 4.942-5.327a.436.436 0 0 1 .643 0l.643.684a.504.504 0 0 1 0 .683l-5.91 6.35a.437.437 0 0 1-.642 0"></path>
                                                                                </svg></span></span></span></span><span class="Polaris-Choice__Label_2vd36">
                                                                    <font style="vertical-align: inherit;">
                                                                        <font style="vertical-align: inherit;">Escaped</font>
                                                                    </font>
                                                                </span></label></li>
                                                        <li><label class="Polaris-Choice_j5gzq" for="PolarisCheckbox22"><span class="Polaris-Choice__Control_1u8vs"><span class="Polaris-Checkbox_1d6zr Polaris-Checkbox--newDesignLanguage_1rik8"><input id="PolarisCheckbox22" name="fulfillment_status[]" type="checkbox" class="Polaris-Checkbox__Input_30ock" aria-invalid="false" role="checkbox" aria-checked="false" value="unshipped"><span class="Polaris-Checkbox__Backdrop_1x2i2"></span><span class="Polaris-Checkbox__Icon_yj27d"><span class="Polaris-Icon_yj27d Polaris-Icon--newDesignLanguage_1rik8"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                                                                                    <path d="M8.315 13.859l-3.182-3.417a.506.506 0 0 1 0-.684l.643-.683a.437.437 0 0 1 .642 0l2.22 2.393 4.942-5.327a.436.436 0 0 1 .643 0l.643.684a.504.504 0 0 1 0 .683l-5.91 6.35a.437.437 0 0 1-.642 0"></path>
                                                                                </svg></span></span></span></span><span class="Polaris-Choice__Label_2vd36">
                                                                    <font style="vertical-align: inherit;">
                                                                        <font style="vertical-align: inherit;">Outstanding</font>
                                                                    </font>
                                                                </span></label></li>
                                                        <li><label class="Polaris-Choice_j5gzq" for="PolarisCheckbox23"><span class="Polaris-Choice__Control_1u8vs"><span class="Polaris-Checkbox_1d6zr Polaris-Checkbox--newDesignLanguage_1rik8"><input id="PolarisCheckbox23" name="fulfillment_status[]" type="checkbox" class="Polaris-Checkbox__Input_30ock" aria-invalid="false" role="checkbox" aria-checked="false" value="partial"><span class="Polaris-Checkbox__Backdrop_1x2i2"></span><span class="Polaris-Checkbox__Icon_yj27d"><span class="Polaris-Icon_yj27d Polaris-Icon--newDesignLanguage_1rik8"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                                                                                    <path d="M8.315 13.859l-3.182-3.417a.506.506 0 0 1 0-.684l.643-.683a.437.437 0 0 1 .642 0l2.22 2.393 4.942-5.327a.436.436 0 0 1 .643 0l.643.684a.504.504 0 0 1 0 .683l-5.91 6.35a.437.437 0 0 1-.642 0"></path>
                                                                                </svg></span></span></span></span><span class="Polaris-Choice__Label_2vd36">
                                                                    <font style="vertical-align: inherit;">
                                                                        <font style="vertical-align: inherit;">Partially escaped</font>
                                                                    </font>
                                                                </span></label></li>
                                                        <li><label class="Polaris-Choice_j5gzq" for="PolarisCheckbox24"><span class="Polaris-Choice__Control_1u8vs"><span class="Polaris-Checkbox_1d6zr Polaris-Checkbox--newDesignLanguage_1rik8"><input id="PolarisCheckbox24" name="fulfillment_status[]" type="checkbox" class="Polaris-Checkbox__Input_30ock" aria-invalid="false" role="checkbox" aria-checked="false" value="scheduled"><span class="Polaris-Checkbox__Backdrop_1x2i2"></span><span class="Polaris-Checkbox__Icon_yj27d"><span class="Polaris-Icon_yj27d Polaris-Icon--newDesignLanguage_1rik8"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                                                                                    <path d="M8.315 13.859l-3.182-3.417a.506.506 0 0 1 0-.684l.643-.683a.437.437 0 0 1 .642 0l2.22 2.393 4.942-5.327a.436.436 0 0 1 .643 0l.643.684a.504.504 0 0 1 0 .683l-5.91 6.35a.437.437 0 0 1-.642 0"></path>
                                                                                </svg></span></span></span></span><span class="Polaris-Choice__Label_2vd36">
                                                                    <font style="vertical-align: inherit;">
                                                                        <font style="vertical-align: inherit;">Scheduled</font>
                                                                    </font>
                                                                </span></label></li>
                                                    </ul>
                                                </fieldset>
                                            </div>
                                            <div class="Polaris-Stack__Item_yiyol"><button class="Polaris-Button_r99lw Polaris-Button--newDesignLanguage_1rik8 Polaris-Button--disabled_hcuh9 Polaris-Button--plain_2z97r" aria-label="Cancel Order fulfillment status" type="button" disabled=""><span class="Polaris-Button__Content_xd1mk"><span class="Polaris-Button__Text_yj3uv">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">Cancel</font>
                                                            </font>
                                                        </span></span></button></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="Polaris-Filters__FilterTriggerContainer_w27xp Polaris-Filters--open_yj2jb"><button class="Polaris-Filters__FilterTrigger_60gd4 Polaris-Filters--newDesignLanguage_1rik8" id="tagToggleButton" type="button" aria-controls="tagCollapsible" aria-expanded="true">
                            <div class="Polaris-Filters__FilterTriggerLabelContainer_gnr9n">
                                <h3 class="Polaris-Filters__FilterTriggerTitle_lbjb0"><span class="">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">Marked with tag</font>
                                        </font>
                                    </span></h3><span><span class="Polaris-Icon_yj27d Polaris-Icon--colorInkLightest_1awo8 Polaris-Icon--isColored_uhqnf Polaris-Icon--newDesignLanguage_1rik8"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                                            <path d="M15 13a.997.997 0 0 1-.707-.293L10 8.414l-4.293 4.293a.999.999 0 1 1-1.414-1.414l5-5a.999.999 0 0 1 1.414 0l5 5A.999.999 0 0 1 15 13z"></path>
                                        </svg></span></span>
                            </div>
                        </button>
                        <div id="tagCollapsible" aria-hidden="false" class="Polaris-Collapsible_1dqql Polaris-Collapsible--open_yj2jb Polaris-Collapsible--fullyOpen_1dxny" style="max-height: none;">
                            <div>
                                <div class="Polaris-Filters__FilterNodeContainer_18d1s">
                                    <div>
                                        <div class="Polaris-Stack_32wu2 Polaris-Stack--vertical_uiuuj Polaris-Stack--spacingTight_1o4d6">
                                            <div class="Polaris-Stack__Item_yiyol">
                                                <div class="Polaris-Labelled--hidden_riqie">
                                                    <div class="Polaris-Labelled__LabelWrapper_bf6ys">
                                                        <div class="Polaris-Label_2vd36"><label id="tagLabel" for="tag" class="Polaris-Label__Text_yj3uv">
                                                                <font style="vertical-align: inherit;">
                                                                    <font style="vertical-align: inherit;">Marked with tag</font>
                                                                </font>
                                                            </label></div>
                                                    </div>
                                                    <div class="Polaris-Connected_wopc9 Polaris-Connected--newDesignLanguage_1rik8">
                                                        <div class="Polaris-Connected__Item_yiyol Polaris-Connected__Item--primary_rmh5m">
                                                            <div class="Polaris-TextField_1spwi Polaris-TextField--newDesignLanguage_1rik8"><input id="tag" class="Polaris-TextField__Input_30ock" aria-labelledby="tagLabel" aria-invalid="false" aria-multiline="false" value="">
                                                                <div class="Polaris-TextField__Backdrop_1x2i2"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="Polaris-Stack__Item_yiyol"><button class="Polaris-Button_r99lw Polaris-Button--newDesignLanguage_1rik8 Polaris-Button--disabled_hcuh9 Polaris-Button--plain_2z97r" aria-label="Clear Tagged with" type="button" disabled=""><span class="Polaris-Button__Content_xd1mk"><span class="Polaris-Button__Text_yj3uv">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">Cancel</font>
                                                            </font>
                                                        </span></span></button></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="Polaris-Filters__FilterTriggerContainer_w27xp Polaris-Filters--open_yj2jb"><button class="Polaris-Filters__FilterTrigger_60gd4 Polaris-Filters--newDesignLanguage_1rik8" id="chargeback_statusToggleButton" type="button" aria-controls="chargeback_statusCollapsible" aria-expanded="true">
                            <div class="Polaris-Filters__FilterTriggerLabelContainer_gnr9n">
                                <h3 class="Polaris-Filters__FilterTriggerTitle_lbjb0"><span class="">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">Chargeback status and dispute</font>
                                        </font>
                                    </span></h3><span><span class="Polaris-Icon_yj27d Polaris-Icon--colorInkLightest_1awo8 Polaris-Icon--isColored_uhqnf Polaris-Icon--newDesignLanguage_1rik8"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                                            <path d="M15 13a.997.997 0 0 1-.707-.293L10 8.414l-4.293 4.293a.999.999 0 1 1-1.414-1.414l5-5a.999.999 0 0 1 1.414 0l5 5A.999.999 0 0 1 15 13z"></path>
                                        </svg></span></span>
                            </div>
                        </button>
                        <div id="chargeback_statusCollapsible" aria-hidden="false" class="Polaris-Collapsible_1dqql Polaris-Collapsible--open_yj2jb Polaris-Collapsible--fullyOpen_1dxny" style="max-height: none;">
                            <div>
                                <div class="Polaris-Filters__FilterNodeContainer_18d1s">
                                    <div>
                                        <div class="Polaris-Stack_32wu2 Polaris-Stack--vertical_uiuuj Polaris-Stack--spacingTight_1o4d6">
                                            <div class="Polaris-Stack__Item_yiyol">
                                                <fieldset class="Polaris-ChoiceList_ygfuw Polaris-ChoiceList--titleHidden_14zrw" id="chargeback_status" aria-invalid="false">
                                                    <ul class="Polaris-ChoiceList__Choices_15o76">
                                                        <li><label class="Polaris-Choice_j5gzq" for="PolarisRadioButton19"><span class="Polaris-Choice__Control_1u8vs"><span class="Polaris-RadioButton_bsatr Polaris-RadioButton--newDesignLanguage_1rik8"><input id="PolarisRadioButton19" name="chargeback_status" type="radio" class="Polaris-RadioButton__Input_30ock" value="needs_response"><span class="Polaris-RadioButton__Backdrop_1x2i2"></span></span></span><span class="Polaris-Choice__Label_2vd36">
                                                                    <font style="vertical-align: inherit;">
                                                                        <font style="vertical-align: inherit;">Open</font>
                                                                    </font>
                                                                </span></label></li>
                                                        <li><label class="Polaris-Choice_j5gzq" for="PolarisRadioButton20"><span class="Polaris-Choice__Control_1u8vs"><span class="Polaris-RadioButton_bsatr Polaris-RadioButton--newDesignLanguage_1rik8"><input id="PolarisRadioButton20" name="chargeback_status" type="radio" class="Polaris-RadioButton__Input_30ock" value="under_review"><span class="Polaris-RadioButton__Backdrop_1x2i2"></span></span></span><span class="Polaris-Choice__Label_2vd36">
                                                                    <font style="vertical-align: inherit;">
                                                                        <font style="vertical-align: inherit;">Sent</font>
                                                                    </font>
                                                                </span></label></li>
                                                        <li><label class="Polaris-Choice_j5gzq" for="PolarisRadioButton21"><span class="Polaris-Choice__Control_1u8vs"><span class="Polaris-RadioButton_bsatr Polaris-RadioButton--newDesignLanguage_1rik8"><input id="PolarisRadioButton21" name="chargeback_status" type="radio" class="Polaris-RadioButton__Input_30ock" value="won"><span class="Polaris-RadioButton__Backdrop_1x2i2"></span></span></span><span class="Polaris-Choice__Label_2vd36">
                                                                    <font style="vertical-align: inherit;">
                                                                        <font style="vertical-align: inherit;">Won</font>
                                                                    </font>
                                                                </span></label></li>
                                                        <li><label class="Polaris-Choice_j5gzq" for="PolarisRadioButton22"><span class="Polaris-Choice__Control_1u8vs"><span class="Polaris-RadioButton_bsatr Polaris-RadioButton--newDesignLanguage_1rik8"><input id="PolarisRadioButton22" name="chargeback_status" type="radio" class="Polaris-RadioButton__Input_30ock" value="lost"><span class="Polaris-RadioButton__Backdrop_1x2i2"></span></span></span><span class="Polaris-Choice__Label_2vd36">
                                                                    <font style="vertical-align: inherit;">
                                                                        <font style="vertical-align: inherit;">Lost</font>
                                                                    </font>
                                                                </span></label></li>
                                                        <li><label class="Polaris-Choice_j5gzq" for="PolarisRadioButton23"><span class="Polaris-Choice__Control_1u8vs"><span class="Polaris-RadioButton_bsatr Polaris-RadioButton--newDesignLanguage_1rik8"><input id="PolarisRadioButton23" name="chargeback_status" type="radio" class="Polaris-RadioButton__Input_30ock" value="any"><span class="Polaris-RadioButton__Backdrop_1x2i2"></span></span></span><span class="Polaris-Choice__Label_2vd36">
                                                                    <font style="vertical-align: inherit;">
                                                                        <font style="vertical-align: inherit;">Any</font>
                                                                    </font>
                                                                </span></label></li>
                                                    </ul>
                                                </fieldset>
                                            </div>
                                            <div class="Polaris-Stack__Item_yiyol"><button class="Polaris-Button_r99lw Polaris-Button--newDesignLanguage_1rik8 Polaris-Button--disabled_hcuh9 Polaris-Button--plain_2z97r" aria-label="Clear Chargeback Status and Dispute" type="button" disabled=""><span class="Polaris-Button__Content_xd1mk"><span class="Polaris-Button__Text_yj3uv">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">Cancel</font>
                                                            </font>
                                                        </span></span></button></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="Polaris-Filters__FilterTriggerContainer_w27xp Polaris-Filters--open_yj2jb"><button class="Polaris-Filters__FilterTrigger_60gd4 Polaris-Filters--newDesignLanguage_1rik8" id="risk_levelToggleButton" type="button" aria-controls="risk_levelCollapsible" aria-expanded="true">
                            <div class="Polaris-Filters__FilterTriggerLabelContainer_gnr9n">
                                <h3 class="Polaris-Filters__FilterTriggerTitle_lbjb0"><span class="">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">Risk level</font>
                                        </font>
                                    </span></h3><span><span class="Polaris-Icon_yj27d Polaris-Icon--colorInkLightest_1awo8 Polaris-Icon--isColored_uhqnf Polaris-Icon--newDesignLanguage_1rik8"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                                            <path d="M15 13a.997.997 0 0 1-.707-.293L10 8.414l-4.293 4.293a.999.999 0 1 1-1.414-1.414l5-5a.999.999 0 0 1 1.414 0l5 5A.999.999 0 0 1 15 13z"></path>
                                        </svg></span></span>
                            </div>
                        </button>
                        <div id="risk_levelCollapsible" aria-hidden="false" class="Polaris-Collapsible_1dqql Polaris-Collapsible--open_yj2jb Polaris-Collapsible--fullyOpen_1dxny" style="max-height: none;">
                            <div>
                                <div class="Polaris-Filters__FilterNodeContainer_18d1s">
                                    <div>
                                        <div class="Polaris-Stack_32wu2 Polaris-Stack--vertical_uiuuj Polaris-Stack--spacingTight_1o4d6">
                                            <div class="Polaris-Stack__Item_yiyol">
                                                <fieldset class="Polaris-ChoiceList_ygfuw Polaris-ChoiceList--titleHidden_14zrw" id="risk_level[]" aria-invalid="false">
                                                    <ul class="Polaris-ChoiceList__Choices_15o76">
                                                        <li><label class="Polaris-Choice_j5gzq" for="PolarisCheckbox25"><span class="Polaris-Choice__Control_1u8vs"><span class="Polaris-Checkbox_1d6zr Polaris-Checkbox--newDesignLanguage_1rik8"><input id="PolarisCheckbox25" name="risk_level[]" type="checkbox" class="Polaris-Checkbox__Input_30ock" aria-invalid="false" role="checkbox" aria-checked="false" value="high"><span class="Polaris-Checkbox__Backdrop_1x2i2"></span><span class="Polaris-Checkbox__Icon_yj27d"><span class="Polaris-Icon_yj27d Polaris-Icon--newDesignLanguage_1rik8"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                                                                                    <path d="M8.315 13.859l-3.182-3.417a.506.506 0 0 1 0-.684l.643-.683a.437.437 0 0 1 .642 0l2.22 2.393 4.942-5.327a.436.436 0 0 1 .643 0l.643.684a.504.504 0 0 1 0 .683l-5.91 6.35a.437.437 0 0 1-.642 0"></path>
                                                                                </svg></span></span></span></span><span class="Polaris-Choice__Label_2vd36">
                                                                    <font style="vertical-align: inherit;">
                                                                        <font style="vertical-align: inherit;">High</font>
                                                                    </font>
                                                                </span></label></li>
                                                        <li><label class="Polaris-Choice_j5gzq" for="PolarisCheckbox26"><span class="Polaris-Choice__Control_1u8vs"><span class="Polaris-Checkbox_1d6zr Polaris-Checkbox--newDesignLanguage_1rik8"><input id="PolarisCheckbox26" name="risk_level[]" type="checkbox" class="Polaris-Checkbox__Input_30ock" aria-invalid="false" role="checkbox" aria-checked="false" value="medium"><span class="Polaris-Checkbox__Backdrop_1x2i2"></span><span class="Polaris-Checkbox__Icon_yj27d"><span class="Polaris-Icon_yj27d Polaris-Icon--newDesignLanguage_1rik8"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                                                                                    <path d="M8.315 13.859l-3.182-3.417a.506.506 0 0 1 0-.684l.643-.683a.437.437 0 0 1 .642 0l2.22 2.393 4.942-5.327a.436.436 0 0 1 .643 0l.643.684a.504.504 0 0 1 0 .683l-5.91 6.35a.437.437 0 0 1-.642 0"></path>
                                                                                </svg></span></span></span></span><span class="Polaris-Choice__Label_2vd36">
                                                                    <font style="vertical-align: inherit;">
                                                                        <font style="vertical-align: inherit;">Medium</font>
                                                                    </font>
                                                                </span></label></li>
                                                        <li><label class="Polaris-Choice_j5gzq" for="PolarisCheckbox27"><span class="Polaris-Choice__Control_1u8vs"><span class="Polaris-Checkbox_1d6zr Polaris-Checkbox--newDesignLanguage_1rik8"><input id="PolarisCheckbox27" name="risk_level[]" type="checkbox" class="Polaris-Checkbox__Input_30ock" aria-invalid="false" role="checkbox" aria-checked="false" value="low"><span class="Polaris-Checkbox__Backdrop_1x2i2"></span><span class="Polaris-Checkbox__Icon_yj27d"><span class="Polaris-Icon_yj27d Polaris-Icon--newDesignLanguage_1rik8"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                                                                                    <path d="M8.315 13.859l-3.182-3.417a.506.506 0 0 1 0-.684l.643-.683a.437.437 0 0 1 .642 0l2.22 2.393 4.942-5.327a.436.436 0 0 1 .643 0l.643.684a.504.504 0 0 1 0 .683l-5.91 6.35a.437.437 0 0 1-.642 0"></path>
                                                                                </svg></span></span></span></span><span class="Polaris-Choice__Label_2vd36">
                                                                    <font style="vertical-align: inherit;">
                                                                        <font style="vertical-align: inherit;">Bass</font>
                                                                    </font>
                                                                </span></label></li>
                                                    </ul>
                                                </fieldset>
                                            </div>
                                            <div class="Polaris-Stack__Item_yiyol"><button class="Polaris-Button_r99lw Polaris-Button--newDesignLanguage_1rik8 Polaris-Button--disabled_hcuh9 Polaris-Button--plain_2z97r" aria-label="Clear Risk level" type="button" disabled=""><span class="Polaris-Button__Content_xd1mk"><span class="Polaris-Button__Text_yj3uv">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">Cancel</font>
                                                            </font>
                                                        </span></span></button></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="Polaris-Filters__FilterTriggerContainer_w27xp Polaris-Filters--open_yj2jb"><button class="Polaris-Filters__FilterTrigger_60gd4 Polaris-Filters--newDesignLanguage_1rik8" id="dateToggleButton" type="button" aria-controls="dateCollapsible" aria-expanded="true">
                            <div class="Polaris-Filters__FilterTriggerLabelContainer_gnr9n">
                                <h3 class="Polaris-Filters__FilterTriggerTitle_lbjb0"><span class="">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">Date</font>
                                        </font>
                                    </span></h3><span><span class="Polaris-Icon_yj27d Polaris-Icon--colorInkLightest_1awo8 Polaris-Icon--isColored_uhqnf Polaris-Icon--newDesignLanguage_1rik8"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                                            <path d="M15 13a.997.997 0 0 1-.707-.293L10 8.414l-4.293 4.293a.999.999 0 1 1-1.414-1.414l5-5a.999.999 0 0 1 1.414 0l5 5A.999.999 0 0 1 15 13z"></path>
                                        </svg></span></span>
                            </div>
                        </button>
                        <div id="dateCollapsible" aria-hidden="false" class="Polaris-Collapsible_1dqql Polaris-Collapsible--open_yj2jb Polaris-Collapsible--fullyOpen_1dxny" style="max-height: none;">
                            <div>
                                <div class="Polaris-Filters__FilterNodeContainer_18d1s">
                                    <div>
                                        <div class="Polaris-Stack_32wu2 Polaris-Stack--vertical_uiuuj Polaris-Stack--spacingTight_1o4d6">
                                            <div class="Polaris-Stack__Item_yiyol">
                                                <div class="Polaris-TextContainer_szg8b">
                                                    <fieldset class="Polaris-ChoiceList_ygfuw Polaris-ChoiceList--titleHidden_14zrw" id="processed_at" aria-invalid="false">
                                                        <ul class="Polaris-ChoiceList__Choices_15o76">
                                                            <li><label class="Polaris-Choice_j5gzq" for="PolarisRadioButton24"><span class="Polaris-Choice__Control_1u8vs"><span class="Polaris-RadioButton_bsatr Polaris-RadioButton--newDesignLanguage_1rik8"><input id="PolarisRadioButton24" name="processed_at" type="radio" class="Polaris-RadioButton__Input_30ock" value="past_day"><span class="Polaris-RadioButton__Backdrop_1x2i2"></span></span></span><span class="Polaris-Choice__Label_2vd36">
                                                                        <font style="vertical-align: inherit;">
                                                                            <font style="vertical-align: inherit;">Today</font>
                                                                        </font>
                                                                    </span></label></li>
                                                            <li><label class="Polaris-Choice_j5gzq" for="PolarisRadioButton25"><span class="Polaris-Choice__Control_1u8vs"><span class="Polaris-RadioButton_bsatr Polaris-RadioButton--newDesignLanguage_1rik8"><input id="PolarisRadioButton25" name="processed_at" type="radio" class="Polaris-RadioButton__Input_30ock" value="past_week"><span class="Polaris-RadioButton__Backdrop_1x2i2"></span></span></span><span class="Polaris-Choice__Label_2vd36">
                                                                        <font style="vertical-align: inherit;">
                                                                            <font style="vertical-align: inherit;">Last 7 days</font>
                                                                        </font>
                                                                    </span></label></li>
                                                            <li><label class="Polaris-Choice_j5gzq" for="PolarisRadioButton26"><span class="Polaris-Choice__Control_1u8vs"><span class="Polaris-RadioButton_bsatr Polaris-RadioButton--newDesignLanguage_1rik8"><input id="PolarisRadioButton26" name="processed_at" type="radio" class="Polaris-RadioButton__Input_30ock" value="past_month"><span class="Polaris-RadioButton__Backdrop_1x2i2"></span></span></span><span class="Polaris-Choice__Label_2vd36">
                                                                        <font style="vertical-align: inherit;">
                                                                            <font style="vertical-align: inherit;">Last 30 days</font>
                                                                        </font>
                                                                    </span></label></li>
                                                            <li><label class="Polaris-Choice_j5gzq" for="PolarisRadioButton27"><span class="Polaris-Choice__Control_1u8vs"><span class="Polaris-RadioButton_bsatr Polaris-RadioButton--newDesignLanguage_1rik8"><input id="PolarisRadioButton27" name="processed_at" type="radio" class="Polaris-RadioButton__Input_30ock" value="past_quarter"><span class="Polaris-RadioButton__Backdrop_1x2i2"></span></span></span><span class="Polaris-Choice__Label_2vd36">
                                                                        <font style="vertical-align: inherit;">
                                                                            <font style="vertical-align: inherit;">Last 90 days</font>
                                                                        </font>
                                                                    </span></label></li>
                                                            <li><label class="Polaris-Choice_j5gzq" for="PolarisRadioButton28"><span class="Polaris-Choice__Control_1u8vs"><span class="Polaris-RadioButton_bsatr Polaris-RadioButton--newDesignLanguage_1rik8"><input id="PolarisRadioButton28" name="processed_at" type="radio" class="Polaris-RadioButton__Input_30ock" value="past_year"><span class="Polaris-RadioButton__Backdrop_1x2i2"></span></span></span><span class="Polaris-Choice__Label_2vd36">
                                                                        <font style="vertical-align: inherit;">
                                                                            <font style="vertical-align: inherit;">Last 12 months</font>
                                                                        </font>
                                                                    </span></label></li>
                                                            <li><label class="Polaris-Choice_j5gzq" for="PolarisRadioButton29"><span class="Polaris-Choice__Control_1u8vs"><span class="Polaris-RadioButton_bsatr Polaris-RadioButton--newDesignLanguage_1rik8"><input id="PolarisRadioButton29" name="processed_at" type="radio" class="Polaris-RadioButton__Input_30ock" value="custom"><span class="Polaris-RadioButton__Backdrop_1x2i2"></span></span></span><span class="Polaris-Choice__Label_2vd36">
                                                                        <font style="vertical-align: inherit;">
                                                                            <font style="vertical-align: inherit;">Personalized</font>
                                                                        </font>
                                                                    </span></label></li>
                                                        </ul>
                                                    </fieldset>
                                                </div>
                                            </div>
                                            <div class="Polaris-Stack__Item_yiyol"><button class="Polaris-Button_r99lw Polaris-Button--newDesignLanguage_1rik8 Polaris-Button--disabled_hcuh9 Polaris-Button--plain_2z97r" aria-label="Clear Date" type="button" disabled=""><span class="Polaris-Button__Content_xd1mk"><span class="Polaris-Button__Text_yj3uv">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">Cancel</font>
                                                            </font>
                                                        </span></span></button></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="Polaris-Filters__FilterTriggerContainer_w27xp Polaris-Filters--open_yj2jb Polaris-Filters--last_yj3nf"><button class="Polaris-Filters__FilterTrigger_60gd4 Polaris-Filters--newDesignLanguage_1rik8" id="credit_card_last4ToggleButton" type="button" aria-controls="credit_card_last4Collapsible" aria-expanded="true">
                            <div class="Polaris-Filters__FilterTriggerLabelContainer_gnr9n">
                                <h3 class="Polaris-Filters__FilterTriggerTitle_lbjb0"><span class="">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">Credit card (last four digits)</font>
                                        </font>
                                    </span></h3><span><span class="Polaris-Icon_yj27d Polaris-Icon--colorInkLightest_1awo8 Polaris-Icon--isColored_uhqnf Polaris-Icon--newDesignLanguage_1rik8"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                                            <path d="M15 13a.997.997 0 0 1-.707-.293L10 8.414l-4.293 4.293a.999.999 0 1 1-1.414-1.414l5-5a.999.999 0 0 1 1.414 0l5 5A.999.999 0 0 1 15 13z"></path>
                                        </svg></span></span>
                            </div>
                        </button>
                        <div id="credit_card_last4Collapsible" aria-hidden="false" class="Polaris-Collapsible_1dqql Polaris-Collapsible--open_yj2jb Polaris-Collapsible--fullyOpen_1dxny" style="max-height: none;">
                            <div>
                                <div class="Polaris-Filters__FilterNodeContainer_18d1s">
                                    <div>
                                        <div class="Polaris-Stack_32wu2 Polaris-Stack--vertical_uiuuj Polaris-Stack--spacingTight_1o4d6">
                                            <div class="Polaris-Stack__Item_yiyol">
                                                <div class="Polaris-Labelled--hidden_riqie">
                                                    <div class="Polaris-Labelled__LabelWrapper_bf6ys">
                                                        <div class="Polaris-Label_2vd36"><label id="credit_card_last4Label" for="credit_card_last4" class="Polaris-Label__Text_yj3uv">
                                                                <font style="vertical-align: inherit;">
                                                                    <font style="vertical-align: inherit;">Credit card (last four digits)</font>
                                                                </font>
                                                            </label></div>
                                                    </div>
                                                    <div class="Polaris-Connected_wopc9 Polaris-Connected--newDesignLanguage_1rik8">
                                                        <div class="Polaris-Connected__Item_yiyol Polaris-Connected__Item--primary_rmh5m">
                                                            <div class="Polaris-TextField_1spwi Polaris-TextField--newDesignLanguage_1rik8"><input id="credit_card_last4" placeholder="xxxx" class="Polaris-TextField__Input_30ock" maxlength="4" aria-labelledby="credit_card_last4Label" aria-invalid="false" aria-multiline="false" value="">
                                                                <div class="Polaris-TextField__Backdrop_1x2i2"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="Polaris-Stack__Item_yiyol"><button class="Polaris-Button_r99lw Polaris-Button--newDesignLanguage_1rik8 Polaris-Button--disabled_hcuh9 Polaris-Button--plain_2z97r" aria-label="Cancel Credit Card (last four digits)" type="button" disabled=""><span class="Polaris-Button__Content_xd1mk"><span class="Polaris-Button__Text_yj3uv">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">Cancel</font>
                                                            </font>
                                                        </span></span></button></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="Polaris-Filters__FiltersContainerFooter_1qv29 Polaris-Filters--newDesignLanguage_1rik8"><button class="Polaris-Button_r99lw Polaris-Button--newDesignLanguage_1rik8 Polaris-Button--disabled_hcuh9" type="button" disabled=""><span class="Polaris-Button__Content_xd1mk"><span class="Polaris-Button__Text_yj3uv">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Clear all filters</font>
                                </font>
                            </span></span></button><button class="Polaris-Button_r99lw Polaris-Button--newDesignLanguage_1rik8 Polaris-Button--primary_7k9zs" type="button"><span class="Polaris-Button__Content_xd1mk"><span class="Polaris-Button__Text_yj3uv">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Done</font>
                                </font>
                            </span></span></button></div>
            </div>
        </div>
    </div>
</div>
<!--More Filters-->
                                                                    <div class="Polaris-Filters-ConnectedFilterControl__AuxiliaryContainer_20w7m">
                                                                        <div class="_8FZV9">
                                                                            <div class="_1P14J">
                                                                                <div style="width: 111.047px;">
                                                                                    <div class="_1iGuE" testid="SaveSearchProxyButtonContainer" aria-hidden="true"><button class="Polaris-Button_r99lw Polaris-Button--newDesignLanguage_1rik8" type="button"><span class="Polaris-Button__Content_xd1mk"><span class="Polaris-Button__Icon_yj27d"><span class="Polaris-Icon_yj27d Polaris-Icon--newDesignLanguage_1rik8"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                                                                                                            <path d="M6.71 15.116l3.357-1.658.892.452 2.327 1.178-.56-3.912.708-.707 1.29-1.29-3.235-.576-.445-.915-1.059-2.176L8.4 8.683l-1.005.168-2.098.35 1.975 1.975-.141.99-.422 2.95zM5.2 18a.8.8 0 0 1-.792-.914l.743-5.203-2.917-2.917a.8.8 0 0 1 .434-1.355l4.398-.733 2.218-4.435a.8.8 0 0 1 1.435.008l2.123 4.361 4.498.801a.8.8 0 0 1 .425 1.353l-2.917 2.917.744 5.203a.8.8 0 0 1-1.154.828l-4.382-2.22-4.502 2.223A.792.792 0 0 1 5.2 18z"></path>
                                                                                                        </svg></span></span><span class="Polaris-Button__Text_yj3uv">Edit view</span></span></button></div>
                                                                                    
                                                                                </div>
                                                                            </div>
                                                                            <div class="_1P14J">
                                                                                <div><button class="Polaris-Button_r99lw Polaris-Button--newDesignLanguage_1rik8" type="button" tabindex="0" aria-controls="Polarispopover82" aria-owns="Polarispopover82" aria-expanded="false"><span class="Polaris-Button__Content_xd1mk"><span class="Polaris-Button__Icon_yj27d"><span class="Polaris-Icon_yj27d Polaris-Icon--newDesignLanguage_1rik8"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                                                                                                        <path d="M5.293 2.293a.997.997 0 0 1 1.414 0l3 3a1 1 0 0 1-1.414 1.414L7 5.414V13a1 1 0 1 1-2 0V5.414L3.707 6.707a1 1 0 0 1-1.414-1.414l3-3zM13 7a1 1 0 0 1 2 0v7.585l1.293-1.292a.999.999 0 1 1 1.414 1.414l-3 3a.997.997 0 0 1-1.414 0l-3-3a.997.997 0 0 1 0-1.414.999.999 0 0 1 1.414 0L13 14.585V7z"></path>
                                                                                                    </svg></span></span><span class="Polaris-Button__Text_yj3uv">Sort</span></span></button></div>
                                                                            </div>
                                                                            <!--sortby-->
                                                                            <!--sortby-->
                                                                        </div>
                                                                    </div>
                            
                                                                </div><span class="Polaris-VisuallyHidden_yrtt5">
                                                                    <div class="Polaris-Filters__TagsContainer_sze4w" aria-live="polite"></div>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="_2LSVC">
                                                    <div>
                                                        <div style="padding-bottom: 0px;"></div>
                                                        <div style="">
                                                            <div class="_2FjUK _1h2Mp _319Qe _1nuK7 _2bfJj" testid="ResourceList-Header">
                                                                <div class="_3flwl">
                                                                    <div class="_1dRsK" testid="ItemCountTextWrapper">Showing 50 products</div>
                                                                    <div class="_3zK37">
                                                                        <div class="_2PTXa _1pjCz _1CqGa">
                                                                            <div class="_1su5c">
                                                                            <label class="Polaris-Choice_j5gzq Polaris-Choice--labelHidden_14tn9" for="ResourceListItemCheckbox0"><span class="Polaris-Choice__Control_1u8vs"><span class="Polaris-Checkbox_1d6zr Polaris-Checkbox--newDesignLanguage_1rik8"><input id="ResourceListItemCheckbox0" type="checkbox" class="Polaris-Checkbox__Input_30ock" role="checkbox" aria-checked="false" value=""><span class="Polaris-Checkbox__Backdrop_1x2i2"></span><span class="Polaris-Checkbox__Icon_yj27d"><span class="Polaris-Icon_yj27d Polaris-Icon--newDesignLanguage_1rik8"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                                                                                                            <path d="M8.315 13.859l-3.182-3.417a.506.506 0 0 1 0-.684l.643-.683a.437.437 0 0 1 .642 0l2.22 2.393 4.942-5.327a.436.436 0 0 1 .643 0l.643.684a.504.504 0 0 1 0 .683l-5.91 6.35a.437.437 0 0 1-.642 0"></path>
                                                                                                        </svg></span></span></span></span><span class="Polaris-Choice__Label_2vd36"></span></label>
                                                                            </div><span class="lUBzX _1tyYL">Showing 50 products</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="_2ffIA _2-2_-">
                                                                        <div class="_4NRev">
                                                                            <dt class="_3fpf6">Product</dt>
                                                                            <dt class="_3Iyiq">Inventory</dt>
                                                                            <dt class="_3P9IG">Status</dt>
                                                                            <dt class="_3-JOU">Category</dt>
                                                                            <dt class="_2WhoC">Action</dt>
                                                                
                                                                        </div>
                                                                    </div>
                                                                    <div class="_1FiSV"><button class="Polaris-Button_r99lw Polaris-Button--newDesignLanguage_1rik8" type="button"><span class="Polaris-Button__Content_xd1mk"><span class="Polaris-Button__Icon_yj27d"><span class="Polaris-Icon_yj27d Polaris-Icon--newDesignLanguage_1rik8"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                                                                                            <path fill-rule="evenodd" d="M4.5 3A1.5 1.5 0 0 0 3 4.5v11A1.5 1.5 0 0 0 4.5 17h11a1.5 1.5 0 0 0 1.5-1.5v-11A1.5 1.5 0 0 0 15.5 3h-11zm9.207 5.707a1 1 0 0 0-1.414-1.414L9 10.586 7.707 9.293a1 1 0 0 0-1.414 1.414l2 2a1 1 0 0 0 1.414 0l4-4z"></path>
                                                                                        </svg></span></span><span class="Polaris-Button__Text_yj3uv">Select</span></span></button></div>
                                                                </div>
                                                                <div class="_1ll7O">
                                                                    <div>
                                                                        <div class="_6AGDs zn_Tf _2T_SB">
                                                                            <div class="_89m86">
                                                                                <div class="Polaris-ButtonGroup_yy85z Polaris-ButtonGroup--segmented_150jh" data-buttongroup-segmented="true">
                                                                                    <div class="Polaris-ButtonGroup__Item_yiyol">
                                                                                        <div class="_2PTXa _1CqGa _1nNSw">
                                                                                            <div class="_1su5c"><label class="Polaris-Choice_j5gzq Polaris-Choice--labelHidden_14tn9" for="PolarisCheckbox5"><span class="Polaris-Choice__Control_1u8vs"><span class="Polaris-Checkbox_1d6zr Polaris-Checkbox--newDesignLanguage_1rik8"><input id="PolarisCheckbox5" type="checkbox" class="Polaris-Checkbox__Input_30ock" aria-invalid="false" role="checkbox" aria-checked="false" value=""><span class="Polaris-Checkbox__Backdrop_1x2i2"></span><span class="Polaris-Checkbox__Icon_yj27d"><span class="Polaris-Icon_yj27d Polaris-Icon--newDesignLanguage_1rik8"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                                                                                                                        <path d="M8.315 13.859l-3.182-3.417a.506.506 0 0 1 0-.684l.643-.683a.437.437 0 0 1 .642 0l2.22 2.393 4.942-5.327a.436.436 0 0 1 .643 0l.643.684a.504.504 0 0 1 0 .683l-5.91 6.35a.437.437 0 0 1-.642 0"></path>
                                                                                                                    </svg></span></span></span></span><span class="Polaris-Choice__Label_2vd36">Select all 50 products</span></label></div><span class="lUBzX">0 selected</span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="Polaris-ButtonGroup__Item_yiyol">
                                                                                        <div class="_2yseV"><button class="Polaris-Button_r99lw Polaris-Button--newDesignLanguage_1rik8" type="button"><span class="Polaris-Button__Content_xd1mk"><span class="Polaris-Button__Text_yj3uv">Edit products</span></span></button></div>
                                                                                    </div>
                                                                                    <div class="Polaris-ButtonGroup__Item_yiyol">
                                                                                        <div>
                                                                                            <div>
                                                                                                <div class="_2yseV"><button class="Polaris-Button_r99lw Polaris-Button--newDesignLanguage_1rik8" type="button" tabindex="0" aria-controls="Polarispopover32" aria-owns="Polarispopover32" aria-expanded="false"><span class="Polaris-Button__Content_xd1mk"><span class="Polaris-Button__Text_yj3uv">More actions</span><span class="Polaris-Button__Icon_yj27d">
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
                                                <ul class="v0Su5 _3jLY9" id="result" aria-live="polite" aria-busy="false">
                                                  @foreach ($products as $product)  
                                                  <li class="H789X _2v98I">
                                                        <div class="_3GcfB">
                                                            <div class="_3AXBQ _2v98I" testid="Item-Wrapper"><a data-polaris-unstyled="true" aria-describedby="gid://shopify/Product/4799715246129" aria-label="3M MicroTouch™ Chassis 1123988" class="_1mXeM" tabindex="0" href="/admin/products/4799715246129"></a>
                                                                <div testid="Item-Content" class="_3vlzY" id="gid://shopify/Product/4799715246129">
                                                                    <div class="_1OQnM" testid="LargerSelectionArea">
                                                                        <div class="_3GtfQ" testid="LargerSelectionArea">
                                                                            <div class="_3IURJ"><span><label class="Polaris-Choice_j5gzq Polaris-Choice--labelHidden_14tn9" for="ResourceListItemCheckbox1"><span class="Polaris-Choice__Control_1u8vs"><span class="Polaris-Checkbox_1d6zr Polaris-Checkbox--newDesignLanguage_1rik8"><input id="ResourceListItemCheckbox1" type="checkbox" class="Polaris-Checkbox__Input_30ock" aria-invalid="false" role="checkbox" aria-checked="false" value=""><span class="Polaris-Checkbox__Backdrop_1x2i2"></span><span class="Polaris-Checkbox__Icon_yj27d"><span class="Polaris-Icon_yj27d Polaris-Icon--newDesignLanguage_1rik8"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                                                                                                            <path d="M8.315 13.859l-3.182-3.417a.506.506 0 0 1 0-.684l.643-.683a.437.437 0 0 1 .642 0l2.22 2.393 4.942-5.327a.436.436 0 0 1 .643 0l.643.684a.504.504 0 0 1 0 .683l-5.91 6.35a.437.437 0 0 1-.642 0"></path>
                                                                                                        </svg></span></span></span></span><span class="Polaris-Choice__Label_2vd36">Select: 3M MicroTouch™ Chassis 1123988</span></label></span></div>
                                                                        </div>
                                                                        <div class="h7HU2" testid="Media"><span class="Polaris-Thumbnail_15hj1 Polaris-Thumbnail--sizeMedium_5f35p"><img src="{{asset('img/product-img/main/'.$product->photo.'')}}" alt="3M MicroTouch™ Chassis 1123988"></span></div>
                                                                    </div>
                                                                    
                                                                        
                                                                    
                                                                    <div class="Go8ev">
                                                                        <div class="jkDBs">
                                                                            <div class="_3Qht4">
                                                                                <div class="_1Koso" testid="ProductTitles"><span><a style="color:black;" 
                                                                                     
                                                                                href="/update-product/{{$product->slug}}" data-polaris-unstyled="true" class="addp"><span class="_3ffC6">{{$product->name}}</span></a></span></div>
                                                                                <div class="_2rEIF"><span><a target="_blank" href="addProduct.html" rel="noopener noreferrer" data-polaris-unstyled="true" class="Polaris-Link_yj5sy" tabindex="0" aria-describedby="PolarisTooltipContent18"><span class="Polaris-Icon_yj27d Polaris-Icon--newDesignLanguage_1rik8" aria-label="View on Online Store"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                                                                                                    <path d="M17.928 9.628C17.837 9.399 15.611 4 10 4S2.162 9.399 2.07 9.628a1.017 1.017 0 0 0 0 .744C2.163 10.601 4.389 16 10 16s7.837-5.399 7.928-5.628a1.017 1.017 0 0 0 0-.744zM10 14a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm0-6a2 2 0 1 0 .002 4.001A2 2 0 0 0 9.999 8z"></path>
                                                                                                </svg></span></a></span></div>
                                                                            </div>


                                                                            
                                                                                @foreach ($categories as $category)
                                                                                    @if ($product->category_id == $category->id)
                                                                                    <span class="_3ukpq">{{$category->name}}</span>        
                                                                                    @endif
                                                                                @endforeach
                                                                                <span class="_3xV5X"><button><a href="/delete/{{$product->slug}}" style="text-decoration: none;color:black;">Delete</a></button></span>
                                                                                
                                                                            <div><span class="_19hkN">
                                                                                    <div class="_5wVMc">
                                                                                        <div><button type="button" class="_1iEvJ" tabindex="0" aria-controls="Polarispopover33" aria-owns="Polarispopover33" aria-expanded="false"><span>
                                                                                                    <div class="Polaris-Stack_32wu2 Polaris-Stack--spacingNone_1b3d3 Polaris-Stack--distributionEqualSpacing_x9cqm Polaris-Stack--noWrap_vecks">
                                                                                                        <div class="Polaris-Stack__Item_yiyol"><span class="Polaris-Badge_2qgie Polaris-Badge--statusSuccess_pc5rl"><span class="Polaris-VisuallyHidden_yrtt5">Success </span>Active</span></div>
                                                                                                        <div class="Polaris-Stack__Item_yiyol">
                                                                                                            <div class="_310Yx _1rMSe"><span class="Polaris-Icon_yj27d Polaris-Icon--newDesignLanguage_1rik8"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                                                                                                                        <path d="M5 8l5 5 5-5H5z"></path>
                                                                                                                    </svg></span></div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </span></button></div>
                                                                                    </div>
                                                                                </span>



                                                                            </div>
                                                                            <div id="ProductListItem-Inventory" class="_1o243"><span class="_6kjm7">{{$product->stock}}</span> in stock</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    @endforeach
                                                </ul>
                                            </div>                                                    <div class="_1IUiv">

                                                    </div>

                                            <div class="eumBm">
                                                <div class="Polaris-Stack_32wu2 Polaris-Stack--distributionCenter_60gbr">
                                                    <div class="Polaris-Stack__Item_yiyol">
                                                        <nav aria-label="Pagination">
                                                            <div class="Polaris-ButtonGroup_yy85z Polaris-ButtonGroup--segmented_150jh" data-buttongroup-segmented="true">
                                                                <div class="Polaris-ButtonGroup__Item_yiyol"><button class="Polaris-Button_r99lw Polaris-Button--newDesignLanguage_1rik8 Polaris-Button--outline_1urzi Polaris-Button--disabled_hcuh9 Polaris-Button--iconOnly_viazp" aria-label="Previous" type="button" disabled=""><span class="Polaris-Button__Content_xd1mk"><span class="Polaris-Button__Icon_yj27d"><span class="Polaris-Icon_yj27d Polaris-Icon--newDesignLanguage_1rik8"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                                                                                        <path d="M12 16a.997.997 0 0 1-.707-.293l-5-5a.999.999 0 0 1 0-1.414l5-5a.999.999 0 1 1 1.414 1.414L8.414 10l4.293 4.293A.999.999 0 0 1 12 16z"></path>
                                                                                    </svg></span></span></span></button></div>
                                                                <div class="Polaris-ButtonGroup__Item_yiyol"><span><button class="Polaris-Button_r99lw Polaris-Button--newDesignLanguage_1rik8 Polaris-Button--outline_1urzi Polaris-Button--iconOnly_viazp" aria-label="Next" type="button" tabindex="0" aria-describedby="PolarisTooltipContent68"><span class="Polaris-Button__Content_xd1mk"><span class="Polaris-Button__Icon_yj27d"><span class="Polaris-Icon_yj27d Polaris-Icon--newDesignLanguage_1rik8"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                                                                                            <path d="M8 16a.999.999 0 0 1-.707-1.707L11.586 10 7.293 5.707a.999.999 0 1 1 1.414-1.414l5 5a.999.999 0 0 1 0 1.414l-5 5A.997.997 0 0 1 8 16z"></path>
                                                                                        </svg></span></span></span></button></span></div>
                                                            </div>
                                                        </nav>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </main>
                </div>
            </div>
        </div>
    </div>
       <!--Export Item-->
<div id="PolarisPortalsContainer_export121" style="visibility: hidden;">
   
 <div data-portal-id="popover-Polarisportal3"></div>
    <div data-portal-id="modal-Polarisportal1">
        <div></div>
    </div>
    <div data-portal-id="Polarisportal2">
        <div class="Polaris-Frame-ToastManager_1utvc" aria-live="polite"></div>
    </div>
    <div data-portal-id="popover-Polarisportal9"></div>
    <div data-portal-id="popover-Polarisportal10"></div>
    <div data-portal-id="sheet-Polarisportal12"></div>
    <div data-portal-id="modal-Polarisportal13">
        <div></div>
    </div>
    <div data-portal-id="modal-Polarisportal14">
        <div></div>
    </div>
    <div data-portal-id="modal-Polarisportal15">
        <div></div>
    </div>
    <div data-portal-id="modal-Polarisportal16">
        <div></div>
    </div>
    <div data-portal-id="modal-Polarisportal17">
        <div></div>
    </div>
    <div data-portal-id="modal-Polarisportal18">
        <div></div>
    </div>
    <div data-portal-id="modal-Polarisportal19">
        <div></div>
    </div>
    <div data-portal-id="modal-Polarisportal20">
        <div>
            <div class="Polaris-Modal-Dialog__Container_13mbo" data-polaris-layer="true" data-polaris-overlay="true">
                <div>
                    <div role="dialog" aria-labelledby="Polarismodal-header9" tabindex="-1" class="Polaris-Modal-Dialog_n3qgo">
                        <div class="Polaris-Modal-Dialog__Modal_2v9yc">
                            <div class="Polaris-Modal-Header_z4uwg">
                                <div id="Polarismodal-header9" class="Polaris-Modal-Header__Title_2qj8j">
                                    <h2 class="Polaris-DisplayText_1u0t8 Polaris-DisplayText--sizeSmall_7647q">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">Export orders</font>
                                        </font>
                                    </h2>
                                </div><button class="Polaris-Modal-CloseButton_bl13t" aria-label="Close" onclick="Close_export()"><span class="Polaris-Icon_yj27d Polaris-Icon--colorInkLighter_2s08r Polaris-Icon--isColored_uhqnf Polaris-Icon--newDesignLanguage_1rik8"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                                            <path d="M11.414 10l6.293-6.293a1 1 0 1 0-1.414-1.414L10 8.586 3.707 2.293a1 1 0 0 0-1.414 1.414L8.586 10l-6.293 6.293a1 1 0 1 0 1.414 1.414L10 11.414l6.293 6.293A.998.998 0 0 0 18 17a.999.999 0 0 0-.293-.707L11.414 10z"></path>
                                        </svg></span></button>
                            </div>
                            <div class="Polaris-Modal__BodyWrapper_1kb1f">
                                <div class="Polaris-Modal__Body_yjdx1 Polaris-Scrollable_1ed9o Polaris-Scrollable--vertical_uiuuj" data-polaris-scrollable="true">
                                    <section class="Polaris-Modal-Section_1b1h1">
                                        <div class="Polaris-Stack_32wu2 Polaris-Stack--vertical_uiuuj">
                                            <div class="Polaris-Stack__Item_yiyol">
                                                <fieldset class="Polaris-ChoiceList_ygfuw" id="PolarisChoiceList1" aria-invalid="false">
                                                    <legend class="Polaris-ChoiceList__Title_2qj8j">
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;">Export</font>
                                                        </font>
                                                    </legend>
                                                    <ul class="Polaris-ChoiceList__Choices_15o76">
                                                        <li>
                                                            <label><input type="radio" name="export">Current page</label>
                                                        </li>
                                                        <li>
                                                            <label><input type="radio" name="export">All orders</label>
                                                        </li>
                                                        <li>
                                                            <label><input type="radio" name="export">50+ orders matching your search</label>
                                                        </li>
                                                        <li>
                                                            <label><input type="radio" name="export">Orders by date</label>
                                                        </li>
                                                    </ul>
                                                    </fieldset>
                                            </div>
                                            <div class="Polaris-Stack__Item_yiyol">
                                                <fieldset class="Polaris-ChoiceList_ygfuw" id="PolarisChoiceList2" aria-invalid="false">
                                                    <legend class="Polaris-ChoiceList__Title_2qj8j">
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;">Export as</font>
                                                        </font>
                                                    </legend>
                                                    <ul class="Polaris-ChoiceList__Choices_15o76">
                                                       
                                                        <li>
                                                            <label><input type="radio" name="exportas">CSV for Excel, Numbers and other spreadsheet programs</label>
                                                        </li>
                                                        <li>
                                                            <label><input type="radio" name="exportas">Simple CSV file</label>
                                                        </li>
                                                    </ul>
                                                </fieldset>
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
                                                <div class="Polaris-ButtonGroup__Item_yiyol"><button class="Polaris-Button_r99lw Polaris-Button--newDesignLanguage_1rik8" type="button" onclick="Close_export()"><span class="Polaris-Button__Content_xd1mk"><span class="Polaris-Button__Text_yj3uv">
                                                                <font style="vertical-align: inherit;">
                                                                    <font style="vertical-align: inherit;">Cancel</font>
                                                                </font>
                                                            </span></span></button></div>
                                                <div class="Polaris-ButtonGroup__Item_yiyol"><button class="Polaris-Button_r99lw Polaris-Button--newDesignLanguage_1rik8" type="button"><span class="Polaris-Button__Content_xd1mk"><span class="Polaris-Button__Text_yj3uv">
                                                                <font style="vertical-align: inherit;">
                                                                    <font style="vertical-align: inherit;">Export transaction histories</font>
                                                                </font>
                                                            </span></span></button></div>
                                                <div class="Polaris-ButtonGroup__Item_yiyol"><button class="Polaris-Button_r99lw Polaris-Button--newDesignLanguage_1rik8 Polaris-Button--primary_7k9zs" type="button"><span class="Polaris-Button__Content_xd1mk"><span class="Polaris-Button__Text_yj3uv">
                                                                <font style="vertical-align: inherit;">
                                                                    <font style="vertical-align: inherit;">Export orders</font>
                                                                </font>
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
        <div class="Polaris-Backdrop_1x2i2"></div>
    </div>
    <div data-portal-id="popover-Polarisportal21"></div>
    <div data-portal-id="popover-Polarisportal22"></div>
    <div data-portal-id="popover-Polarisportal23"></div>
    <div data-portal-id="popover-Polarisportal24"></div>
    <div data-portal-id="popover-Polarisportal25"></div>
    <div data-portal-id="popover-Polarisportal26"></div>
    <div data-portal-id="popover-Polarisportal27"></div>
    <div data-portal-id="tooltip-Polarisportal28"></div>
    <div data-portal-id="popover-Polarisportal29"></div>
    <div data-portal-id="popover-Polarisportal30"></div>
    <div data-portal-id="tooltip-Polarisportal31"></div>
    <div data-portal-id="popover-Polarisportal32"></div>
    <div data-portal-id="popover-Polarisportal33"></div>
    <div data-portal-id="tooltip-Polarisportal34"></div>
    <div data-portal-id="popover-Polarisportal35"></div>
    <div data-portal-id="popover-Polarisportal36"></div>
    <div data-portal-id="tooltip-Polarisportal37"></div>
    <div data-portal-id="popover-Polarisportal38"></div>
    <div data-portal-id="popover-Polarisportal39"></div>
    <div data-portal-id="popover-Polarisportal40"></div>
    <div data-portal-id="popover-Polarisportal41"></div>
    <div data-portal-id="tooltip-Polarisportal42"></div>
    <div data-portal-id="popover-Polarisportal43"></div>
    <div data-portal-id="popover-Polarisportal44"></div>
    <div data-portal-id="tooltip-Polarisportal45"></div>
    <div data-portal-id="tooltip-Polarisportal46"></div>
    <div data-portal-id="popover-Polarisportal47"></div>
    <div data-portal-id="popover-Polarisportal48"></div>
    <div data-portal-id="tooltip-Polarisportal49"></div>
    <div data-portal-id="popover-Polarisportal50"></div>
    <div data-portal-id="popover-Polarisportal51"></div>
    <div data-portal-id="tooltip-Polarisportal52"></div>
    <div data-portal-id="popover-Polarisportal53"></div>
    <div data-portal-id="popover-Polarisportal54"></div>
    <div data-portal-id="tooltip-Polarisportal55"></div>
    <div data-portal-id="popover-Polarisportal56"></div>
    <div data-portal-id="tooltip-Polarisportal57"></div>
    <div data-portal-id="tooltip-Polarisportal58"></div>
    <div data-portal-id="popover-Polarisportal59"></div>
    <div data-portal-id="tooltip-Polarisportal60"></div>
    <div data-portal-id="popover-Polarisportal61"></div>
    <div data-portal-id="popover-Polarisportal62"></div>
    <div data-portal-id="popover-Polarisportal63"></div>
    <div data-portal-id="tooltip-Polarisportal64"></div>
    <div data-portal-id="popover-Polarisportal65"></div>
    <div data-portal-id="popover-Polarisportal66"></div>
    <div data-portal-id="popover-Polarisportal67"></div>
    <div data-portal-id="popover-Polarisportal68"></div>
    <div data-portal-id="popover-Polarisportal69"></div>
    <div data-portal-id="popover-Polarisportal70"></div>
    <div data-portal-id="popover-Polarisportal71"></div>
    <div data-portal-id="popover-Polarisportal72"></div>
    <div data-portal-id="tooltip-Polarisportal73"></div>
    <div data-portal-id="tooltip-Polarisportal74"></div>
    <div data-portal-id="popover-Polarisportal75"></div>
    <div data-portal-id="popover-Polarisportal76"></div>
    <div data-portal-id="tooltip-Polarisportal77"></div>
    <div data-portal-id="popover-Polarisportal78"></div>
    <div data-portal-id="popover-Polarisportal79"></div>
    <div data-portal-id="popover-Polarisportal80"></div>
    <div data-portal-id="popover-Polarisportal81"></div>
    <div data-portal-id="popover-Polarisportal82"></div>
    <div data-portal-id="popover-Polarisportal83"></div>
    <div data-portal-id="popover-Polarisportal84"></div>
    <div data-portal-id="tooltip-Polarisportal85"></div>
    <div data-portal-id="tooltip-Polarisportal86"></div>
    <div data-portal-id="popover-Polarisportal87"></div>
    <div data-portal-id="popover-Polarisportal88"></div>
    <div data-portal-id="popover-Polarisportal89"></div>
    <div data-portal-id="popover-Polarisportal90"></div>
    <div data-portal-id="tooltip-Polarisportal91"></div>
    <div data-portal-id="popover-Polarisportal92"></div>
    <div data-portal-id="popover-Polarisportal93"></div>
    <div data-portal-id="popover-Polarisportal94"></div>
    <div data-portal-id="popover-Polarisportal95"></div>
    <div data-portal-id="popover-Polarisportal96"></div>
    <div data-portal-id="popover-Polarisportal97"></div>
    <div data-portal-id="tooltip-Polarisportal98"></div>
    <div data-portal-id="popover-Polarisportal99"></div>
    <div data-portal-id="tooltip-Polarisportal100"></div>
    <div data-portal-id="popover-Polarisportal101"></div>
    <div data-portal-id="popover-Polarisportal102"></div>
    <div data-portal-id="popover-Polarisportal103"></div>
    <div data-portal-id="popover-Polarisportal104"></div>
    <div data-portal-id="popover-Polarisportal105"></div>
    <div data-portal-id="popover-Polarisportal106"></div>
    <div data-portal-id="popover-Polarisportal107"></div>
    <div data-portal-id="popover-Polarisportal108"></div>
    <div data-portal-id="tooltip-Polarisportal109"></div>
    <div data-portal-id="popover-Polarisportal110"></div>
    <div data-portal-id="popover-Polarisportal113"></div>

</div>
<!--Export Item-->
   <!--Export Item-->
<div id="PolarisPortalsContainer_export122" style="visibility: hidden;">
   
 <div data-portal-id="popover-Polarisportal3"></div>
    <div data-portal-id="modal-Polarisportal1">
        <div></div>
    </div>
    <div data-portal-id="Polarisportal2">
        <div class="Polaris-Frame-ToastManager_1utvc" aria-live="polite"></div>
    </div>
    <div data-portal-id="popover-Polarisportal9"></div>
    <div data-portal-id="popover-Polarisportal10"></div>
    <div data-portal-id="sheet-Polarisportal12"></div>
    <div data-portal-id="modal-Polarisportal13">
        <div></div>
    </div>
    <div data-portal-id="modal-Polarisportal14">
        <div></div>
    </div>
    <div data-portal-id="modal-Polarisportal15">
        <div></div>
    </div>
    <div data-portal-id="modal-Polarisportal16">
        <div></div>
    </div>
    <div data-portal-id="modal-Polarisportal17">
        <div></div>
    </div>
    <div data-portal-id="modal-Polarisportal18">
        <div></div>
    </div>
    <div data-portal-id="modal-Polarisportal19">
        <div></div>
    </div>
    <div data-portal-id="modal-Polarisportal20">
        <div>
            <div class="Polaris-Modal-Dialog__Container_13mbo" data-polaris-layer="true" data-polaris-overlay="true">
                <div>
                    <div role="dialog" aria-labelledby="Polarismodal-header9" tabindex="-1" class="Polaris-Modal-Dialog_n3qgo">
                        <div class="Polaris-Modal-Dialog__Modal_2v9yc">
                            <div class="Polaris-Modal-Header_z4uwg">
                                <div id="Polarismodal-header9" class="Polaris-Modal-Header__Title_2qj8j">
                                    <h2 class="Polaris-DisplayText_1u0t8 Polaris-DisplayText--sizeSmall_7647q">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">Import orders</font>
                                        </font>
                                    </h2>
                                </div><button class="Polaris-Modal-CloseButton_bl13t" aria-label="Close" onclick="Close_import()"><span class="Polaris-Icon_yj27d Polaris-Icon--colorInkLighter_2s08r Polaris-Icon--isColored_uhqnf Polaris-Icon--newDesignLanguage_1rik8"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                                            <path d="M11.414 10l6.293-6.293a1 1 0 1 0-1.414-1.414L10 8.586 3.707 2.293a1 1 0 0 0-1.414 1.414L8.586 10l-6.293 6.293a1 1 0 1 0 1.414 1.414L10 11.414l6.293 6.293A.998.998 0 0 0 18 17a.999.999 0 0 0-.293-.707L11.414 10z"></path>
                                        </svg></span></button>
                            </div>
                            <div class="Polaris-Modal__BodyWrapper_1kb1f">
                                <div class="Polaris-Modal__Body_yjdx1 Polaris-Scrollable_1ed9o Polaris-Scrollable--vertical_uiuuj" data-polaris-scrollable="true">
                                    <section class="Polaris-Modal-Section_1b1h1">
                                        <div class="Polaris-Stack_32wu2 Polaris-Stack--vertical_uiuuj">
                                            <div class="Polaris-Stack__Item_yiyol">
                                                <fieldset class="Polaris-ChoiceList_ygfuw" id="PolarisChoiceList1" aria-invalid="false">
                                                    <legend class="Polaris-ChoiceList__Title_2qj8j">
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;">Import</font>
                                                        </font>
                                                    </legend>
                                                    <ul class="Polaris-ChoiceList__Choices_15o76">
                                                        <li>
                                                            <label><input type="radio" name="export">Current page</label>
                                                        </li>
                                                        <li>
                                                            <label><input type="radio" name="export">All orders</label>
                                                        </li>
                                                        <li>
                                                            <label><input type="radio" name="export">50+ orders matching your search</label>
                                                        </li>
                                                        <li>
                                                            <label><input type="radio" name="export">Orders by date</label>
                                                        </li>
                                                    </ul>
                                                    </fieldset>
                                            </div>
                                            <div class="Polaris-Stack__Item_yiyol">
                                                <fieldset class="Polaris-ChoiceList_ygfuw" id="PolarisChoiceList2" aria-invalid="false">
                                                    <legend class="Polaris-ChoiceList__Title_2qj8j">
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;">Import as</font>
                                                        </font>
                                                    </legend>
                                                    <ul class="Polaris-ChoiceList__Choices_15o76">
                                                       
                                                        <li>
                                                            <label><input type="radio" name="exportas">CSV for Excel, Numbers and other spreadsheet programs</label>
                                                        </li>
                                                        <li>
                                                            <label><input type="radio" name="exportas">Simple CSV file</label>
                                                        </li>
                                                    </ul>
                                                </fieldset>
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
                                                <div class="Polaris-ButtonGroup__Item_yiyol"><button class="Polaris-Button_r99lw Polaris-Button--newDesignLanguage_1rik8" type="button" onclick="Close_import()"><span class="Polaris-Button__Content_xd1mk"><span class="Polaris-Button__Text_yj3uv">
                                                                <font style="vertical-align: inherit;">
                                                                    <font style="vertical-align: inherit;">Cancel</font>
                                                                </font>
                                                            </span></span></button></div>
                                                <div class="Polaris-ButtonGroup__Item_yiyol"><button class="Polaris-Button_r99lw Polaris-Button--newDesignLanguage_1rik8" type="button"><span class="Polaris-Button__Content_xd1mk"><span class="Polaris-Button__Text_yj3uv">
                                                                <font style="vertical-align: inherit;">
                                                                    <font style="vertical-align: inherit;">Import transaction histories</font>
                                                                </font>
                                                            </span></span></button></div>
                                                <div class="Polaris-ButtonGroup__Item_yiyol"><button class="Polaris-Button_r99lw Polaris-Button--newDesignLanguage_1rik8 Polaris-Button--primary_7k9zs" type="button"><span class="Polaris-Button__Content_xd1mk"><span class="Polaris-Button__Text_yj3uv">
                                                                <font style="vertical-align: inherit;">
                                                                    <font style="vertical-align: inherit;">Import orders</font>
                                                                </font>
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
        <div class="Polaris-Backdrop_1x2i2"></div>
    </div>
    <div data-portal-id="popover-Polarisportal21"></div>
    <div data-portal-id="popover-Polarisportal22"></div>
    <div data-portal-id="popover-Polarisportal23"></div>
    <div data-portal-id="popover-Polarisportal24"></div>
    <div data-portal-id="popover-Polarisportal25"></div>
    <div data-portal-id="popover-Polarisportal26"></div>
    <div data-portal-id="popover-Polarisportal27"></div>
    <div data-portal-id="tooltip-Polarisportal28"></div>
    <div data-portal-id="popover-Polarisportal29"></div>
    <div data-portal-id="popover-Polarisportal30"></div>
    <div data-portal-id="tooltip-Polarisportal31"></div>
    <div data-portal-id="popover-Polarisportal32"></div>
    <div data-portal-id="popover-Polarisportal33"></div>
    <div data-portal-id="tooltip-Polarisportal34"></div>
    <div data-portal-id="popover-Polarisportal35"></div>
    <div data-portal-id="popover-Polarisportal36"></div>
    <div data-portal-id="tooltip-Polarisportal37"></div>
    <div data-portal-id="popover-Polarisportal38"></div>
    <div data-portal-id="popover-Polarisportal39"></div>
    <div data-portal-id="popover-Polarisportal40"></div>
    <div data-portal-id="popover-Polarisportal41"></div>
    <div data-portal-id="tooltip-Polarisportal42"></div>
    <div data-portal-id="popover-Polarisportal43"></div>
    <div data-portal-id="popover-Polarisportal44"></div>
    <div data-portal-id="tooltip-Polarisportal45"></div>
    <div data-portal-id="tooltip-Polarisportal46"></div>
    <div data-portal-id="popover-Polarisportal47"></div>
    <div data-portal-id="popover-Polarisportal48"></div>
    <div data-portal-id="tooltip-Polarisportal49"></div>
    <div data-portal-id="popover-Polarisportal50"></div>
    <div data-portal-id="popover-Polarisportal51"></div>
    <div data-portal-id="tooltip-Polarisportal52"></div>
    <div data-portal-id="popover-Polarisportal53"></div>
    <div data-portal-id="popover-Polarisportal54"></div>
    <div data-portal-id="tooltip-Polarisportal55"></div>
    <div data-portal-id="popover-Polarisportal56"></div>
    <div data-portal-id="tooltip-Polarisportal57"></div>
    <div data-portal-id="tooltip-Polarisportal58"></div>
    <div data-portal-id="popover-Polarisportal59"></div>
    <div data-portal-id="tooltip-Polarisportal60"></div>
    <div data-portal-id="popover-Polarisportal61"></div>
    <div data-portal-id="popover-Polarisportal62"></div>
    <div data-portal-id="popover-Polarisportal63"></div>
    <div data-portal-id="tooltip-Polarisportal64"></div>
    <div data-portal-id="popover-Polarisportal65"></div>
    <div data-portal-id="popover-Polarisportal66"></div>
    <div data-portal-id="popover-Polarisportal67"></div>
    <div data-portal-id="popover-Polarisportal68"></div>
    <div data-portal-id="popover-Polarisportal69"></div>
    <div data-portal-id="popover-Polarisportal70"></div>
    <div data-portal-id="popover-Polarisportal71"></div>
    <div data-portal-id="popover-Polarisportal72"></div>
    <div data-portal-id="tooltip-Polarisportal73"></div>
    <div data-portal-id="tooltip-Polarisportal74"></div>
    <div data-portal-id="popover-Polarisportal75"></div>
    <div data-portal-id="popover-Polarisportal76"></div>
    <div data-portal-id="tooltip-Polarisportal77"></div>
    <div data-portal-id="popover-Polarisportal78"></div>
    <div data-portal-id="popover-Polarisportal79"></div>
    <div data-portal-id="popover-Polarisportal80"></div>
    <div data-portal-id="popover-Polarisportal81"></div>
    <div data-portal-id="popover-Polarisportal82"></div>
    <div data-portal-id="popover-Polarisportal83"></div>
    <div data-portal-id="popover-Polarisportal84"></div>
    <div data-portal-id="tooltip-Polarisportal85"></div>
    <div data-portal-id="tooltip-Polarisportal86"></div>
    <div data-portal-id="popover-Polarisportal87"></div>
    <div data-portal-id="popover-Polarisportal88"></div>
    <div data-portal-id="popover-Polarisportal89"></div>
    <div data-portal-id="popover-Polarisportal90"></div>
    <div data-portal-id="tooltip-Polarisportal91"></div>
    <div data-portal-id="popover-Polarisportal92"></div>
    <div data-portal-id="popover-Polarisportal93"></div>
    <div data-portal-id="popover-Polarisportal94"></div>
    <div data-portal-id="popover-Polarisportal95"></div>
    <div data-portal-id="popover-Polarisportal96"></div>
    <div data-portal-id="popover-Polarisportal97"></div>
    <div data-portal-id="tooltip-Polarisportal98"></div>
    <div data-portal-id="popover-Polarisportal99"></div>
    <div data-portal-id="tooltip-Polarisportal100"></div>
    <div data-portal-id="popover-Polarisportal101"></div>
    <div data-portal-id="popover-Polarisportal102"></div>
    <div data-portal-id="popover-Polarisportal103"></div>
    <div data-portal-id="popover-Polarisportal104"></div>
    <div data-portal-id="popover-Polarisportal105"></div>
    <div data-portal-id="popover-Polarisportal106"></div>
    <div data-portal-id="popover-Polarisportal107"></div>
    <div data-portal-id="popover-Polarisportal108"></div>
    <div data-portal-id="tooltip-Polarisportal109"></div>
    <div data-portal-id="popover-Polarisportal110"></div>
    <div data-portal-id="popover-Polarisportal113"></div>

</div>
<!--Export Item-->

@endsection