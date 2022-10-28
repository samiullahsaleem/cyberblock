@extends('layouts.admin')
@section('title', 'Update Category')
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
    <link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/settingsNav-4637d299ffdf8efe672daffe75e816ef825ea8b49668d687cc1153a2b4008acf.css" crossorigin="anonymous">
    <link rel="prefetch" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/adminnextfallback-25b8e6ce5ba4e27dc3ebd7c3be9c55caad6efad3d7f4ab3174250cf4fc3b9ce5.css">
    <link rel="prefetch" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/adminnextfallback-56d51c8cd7433d99fc28d8f3e29f79419679190c4096a55a796e449c43d83e87.js">
    <link rel="prefetch" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/TopBarDestinationsSwitcherNext-785b116924b00e6e8e93268ac907b8f5d5de8d0694983b884ecfbfc52584c7a2.css">
    <link rel="prefetch" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/TopBarDestinationsSwitcherNext-4b83da42a10c62432faa4dd4e596ab4de5294526204d0289c7234e1301de1fc9.js">
    <link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/TopBarDestinationsSwitcherNext-785b116924b00e6e8e93268ac907b8f5d5de8d0694983b884ecfbfc52584c7a2.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/adminnextfallback-25b8e6ce5ba4e27dc3ebd7c3be9c55caad6efad3d7f4ab3174250cf4fc3b9ce5.css">
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
    <link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/vendors~homeIndex-4c3b2b75713db5b54310dba1bd35990edc57395680a2e5d3de093e8b93106308.css">

    <link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/analyticsOnlineStoreSpeed~homeIndex~mtOverview~shippingSettingsIndex-a832e8799ccf7ad12d39484fb29d781f4c02ce3410ef2a6c93a8268bf4949823.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/homeIndex-04943142203a598dc1fbad624fe393383eee1ab4079ec1a5263708d26e9d2140.css">

    <link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/HomeSkeleton-4fcd4e6732d85a03203623665263413553f35851abba53dae709ed6271633530.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/AppBridgeResourcePicker~MobileCompatibleCollectionShow~ShopifyPaymentsDetails~automaticdiscountdetai~f8eeab94-fff5d4d60675dd64bdbc71ddc79522d668f2990931c0dbc3580a48cdf5f8c92c.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/AppBridgeResourcePicker~MobileCompatibleCollectionShow~automaticdiscountdetails~collectiondetails~co~77274e6d-7d68c96183c416cafc3d380fc948c38fa6c92d7a65380cbd96d00bbbf9b51b97.css">

    <link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/collectiondetails-71584bbfe4dd1124eef8d617852e1b6a92060e0da88c48aeef2d8d5dd010deb8.css">

<div class="Polaris-Frame__ContextualSaveBar_14m7v Polaris-Frame-CSSAnimation--startFade_1gu4x Polaris-Frame-CSSAnimation--endFade_1qzoi">

</div>
<main class="Polaris-Frame__Main_yj28s Polaris-Frame__Main--newDesignLanguage_129jf" id="AppFrameMain" data-has-global-ribbon="false"><a id="AppFrameMainContent" tabindex="-1"></a>
    <div class="Polaris-Frame__Content_xd1mk">
        <div class="Polaris-Page_yisnh Polaris-Page--newDesignLanguage_1rik8">
            <div class="Polaris-Page-Header_z4uwg Polaris-Page-Header--isSingleRow_172ur Polaris-Page-Header--hasNavigation_gfpa8 Polaris-Page-Header--newDesignLanguage_1rik8 Polaris-Page-Header--mediumTitle_bfol6">
                <div class="Polaris-Page-Header__Row_375v7 Polaris-Page-Header__RowCondensed_1gexu">
                    <div class="Polaris-Page-Header__BreadcrumbWrapper_1tgwk Polaris-Page-Header--newDesignLanguage_1rik8">
                        <nav role="navigation"><a data-polaris-unstyled="true" class="Polaris-Breadcrumbs__Breadcrumb_llsun Polaris-Breadcrumbs--newDesignLanguage_1rik8" href="/category"><span class="Polaris-Breadcrumbs__ContentWrapper_1yvfo"><span class="Polaris-Breadcrumbs__Icon_yj27d"><span class="Polaris-Icon_yj27d Polaris-Icon--newDesignLanguage_1rik8"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                                                <path d="M17 9H5.414l3.293-3.293a.999.999 0 1 0-1.414-1.414l-5 5a.999.999 0 0 0 0 1.414l5 5a.997.997 0 0 0 1.414 0 .999.999 0 0 0 0-1.414L5.414 11H17a1 1 0 1 0 0-2z"></path>
                                            </svg></span></span><span class="Polaris-VisuallyHidden_yrtt5">Category</span></span></a></nav>
                    </div>
                    <div class="Polaris-Page-Header__TitleWrapper_bejfn">
                        <div>
                            <div class="Polaris-Header-Title__TitleAndSubtitleWrapper_40sxf">
                                <div class="Polaris-Header-Title_2qj8j">
                                    <h1 class="Polaris-Header-Title--newDesignLanguageTitle_1wh8d">Update Category</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="Polaris-Page__Content_xd1mk">
                <form method="POST" action="/update-category/{{$cat->slug}}/success" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="Polaris-Layout_sl20u Polaris-Layout--newDesignLanguage_1rik8">
                        <div class="Polaris-Layout__Section_1b1h1">
                            <div class="Polaris-Card_yis1o Polaris-Card--newDesignLanguage_1rik8">
                                <div class="Polaris-Card__Section_1b1h1">
                                    <div class="Polaris-FormLayout_1wntl">
                                        <div class="Polaris-FormLayout__Item_yiyol">
                                            <div class="">
                                                <div class="Polaris-Labelled__LabelWrapper_bf6ys">
                                                    <div class="Polaris-Label_2vd36"><label id="collectionTitleTextFieldLabel" for="collectionTitleTextField" class="Polaris-Label__Text_yj3uv">Title</label></div>
                                                </div>
                                                <div class="Polaris-Connected_wopc9 Polaris-Connected--newDesignLanguage_1rik8">
                                                    <div class="Polaris-Connected__Item_yiyol Polaris-Connected__Item--primary_rmh5m">
                                                        <div class="Polaris-TextField_1spwi Polaris-TextField--newDesignLanguage_1rik8">
                                                            
                                                            <input name="name" id="collectionTitleTextField" placeholder="e.g. Summer collection, Under $100, Staff picks" class="Polaris-TextField__Input_30ock" aria-labelledby="collectionTitleTextFieldLabel" aria-invalid="false" aria-multiline="false" value="{{$cat->name}}">

                                                            <div class="Polaris-TextField__Backdrop_1x2i2"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            
                            <div class="Polaris-Card_yis1o Polaris-Card--newDesignLanguage_1rik8">
                               
                        </div>
                        <div class="Polaris-Layout__Section_1b1h1 Polaris-Layout__Section--secondary_1sx8i">
                            <div class="Polaris-Card_yis1o Polaris-Card--subdued_17vaa Polaris-Card--newDesignLanguage_1rik8">
                                <header class="_1UFNz">
                                    <div class="Polaris-Stack_32wu2 Polaris-Stack--alignmentBaseline_aupj5">
                                        <div class="Polaris-Stack__Item_yiyol Polaris-Stack__Item--fill_vpuzt">
                                            <h2 class="Polaris-Heading_1brcv">Category image</h2>
                                        </div>
                                    </div>
                                </header>
                                 <div class="Polaris-Card__Section_1b1h1">
                                    <div class="Polaris-Labelled--hidden_riqie">
                                        <div class="Polaris-Labelled__LabelWrapper_bf6ys">
                                            <div class="Polaris-Label_2vd36"><label id="PolarisDropZone2Label" for="PolarisDropZone2" class="Polaris-Label__Text_yj3uv">Upload file</label></div>
                                        </div>
                                         <div class="Polaris-DropZone_1ehhx Polaris-DropZone--hasOutline_1z0fh Polaris-DropZone--newDesignLanguage_1rik8 Polaris-DropZone--sizeLarge_61dxo" aria-disabled="false">
                                            <div class="Polaris-DropZone__Container_13mbo">
                                                <div class="_2aa8P">
                                                    <div class="Polaris-DropZone-FileUpload_1fbjx Polaris-DropZone-FileUpload--newDesignLanguage_1rik8">
                                                        <div class="Polaris-Stack_32wu2 Polaris-Stack--vertical_uiuuj Polaris-Stack--spacingTight_1o4d6">
                                                            <div class="Polaris-Stack__Item_yiyol"><img width="40" src="data:image/svg+xml,%3csvg fill='none' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20'%3e%3cpath fill-rule='evenodd' clip-rule='evenodd' d='M20 10a10 10 0 11-20 0 10 10 0 0120 0zM5.3 8.3l4-4a1 1 0 011.4 0l4 4a1 1 0 01-1.4 1.4L11 7.4V15a1 1 0 11-2 0V7.4L6.7 9.7a1 1 0 01-1.4-1.4z' fill='%235C5F62'/%3e%3c/svg%3e" alt=""></div>
                                                            <div class="Polaris-Stack__Item_yiyol">
                                                                <div class="Polaris-DropZone-FileUpload__Button_r99lw Polaris-DropZone-FileUpload--newDesignLanguage_1rik8"><button type="button" style="border: none;background: none;"><label style="margin-bottom: 0px;">
                                                                    
                                                                    <input type="file" accept="image/*" name="image" required id="file1"  onchange="loadFile(event)" style="display: none;">
                                                                    
                                                                    Add Media</label></button></div>
                                                            </div>
                                                            <div class="Polaris-Stack__Item_yiyol">
                                                                <p class="Polaris-Caption_1b1go"><span class="Polaris-TextStyle--variationSubdued_1segu"><p id="output"></p></span></p>
                                                            </div>
                                                            <script>
                                                            var loadFile = function(event) {
                                                            var image1 = document.getElementById('output');
                                                            var fi1= document.getElementById("file1");
                                                            var img1=URL.createObjectURL(event.target.files[0]);
                                                            image1.innerHTML= fi1.files.item(0).name;
                                                            document.getElementById('Display1').style.backgroundImage= "url(" + img1 + ") no-repeat";
                                                        };
                                                            
                                                            </script>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <span class="Polaris-VisuallyHidden_yrtt5"><input id="PolarisDropZone2" accept="image/*" type="file" autocomplete="off"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                           
                        <div class="Polaris-Layout__Section_1b1h1">
                            <div class="Polaris-PageActions_fcnua">
                                <div class="Polaris-Stack_32wu2 Polaris-Stack--spacingTight_1o4d6 Polaris-Stack--distributionTrailing_z5d5z">
                                    <div class="Polaris-Stack__Item_yiyol"><button class="Polaris-Button_r99lw Polaris-Button--newDesignLanguage_1rik8 Polaris-Button--primary_7k9zs" type="submit"><span class="Polaris-Button__Content_xd1mk"><span class="Polaris-Button__Text_yj3uv">Update</span></span></button></div>
                                </div>
                            </div>
                        </div>
                    </div><span class="Polaris-VisuallyHidden_yrtt5"><button type="submit" aria-hidden="true" tabindex="-1">Submit</button></span>
                </form>
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
<div data-portal-id="modal-Polarisportal171">
<div></div>
</div>
<div data-portal-id="modal-Polarisportal172">
<div></div>
</div>
<div data-portal-id="modal-Polarisportal173">
<div></div>
</div>
<div data-portal-id="modal-Polarisportal174">
<div></div>
</div>
<div data-portal-id="modal-Polarisportal175">
<div></div>
</div>
<div data-portal-id="modal-Polarisportal176">
<div></div>
</div>
<div data-portal-id="tooltip-Polarisportal177"></div>
<div data-portal-id="popover-Polarisportal178"></div>
<div data-portal-id="tooltip-Polarisportal179"></div>
<div data-portal-id="tooltip-Polarisportal180"></div>
<div data-portal-id="tooltip-Polarisportal181"></div>
<div data-portal-id="tooltip-Polarisportal182"></div>
<div data-portal-id="tooltip-Polarisportal183"></div>
<div data-portal-id="tooltip-Polarisportal184"></div>
<div data-portal-id="tooltip-Polarisportal185"></div>
<div data-portal-id="tooltip-Polarisportal186"></div>
<div data-portal-id="popover-Polarisportal187"></div>
<div data-portal-id="tooltip-Polarisportal188"></div>
<div data-portal-id="popover-Polarisportal189"></div>
<div data-portal-id="tooltip-Polarisportal190"></div>
<div data-portal-id="popover-Polarisportal191"></div>
<div data-portal-id="tooltip-Polarisportal192"></div>
<div data-portal-id="tooltip-Polarisportal193"></div>
<div data-portal-id="tooltip-Polarisportal194"></div>
<div data-portal-id="tooltip-Polarisportal195"></div>
<div data-portal-id="tooltip-Polarisportal196"></div>
<div data-portal-id="popover-Polarisportal197"></div>
</div>
</div>
</div>
<!--Mane pop over-->
<div id="PolarisPortalsContainer-Manage" style="visibility: hidden;">
<div data-portal-id="popover-Polarisportal3"></div>
<div data-portal-id="modal-Polarisportal1">
<div></div>
</div>
<div data-portal-id="Polarisportal2">
<div class="Polaris-Frame-ToastManager_1utvc" aria-live="polite"></div>
</div>
<div data-portal-id="popover-Polarisportal4"></div>
<div data-portal-id="popover-Polarisportal5"></div>
<div data-portal-id="modal-Polarisportal171">
<div></div>
</div>
<div data-portal-id="modal-Polarisportal172">
<div></div>
</div>
<div data-portal-id="modal-Polarisportal173">
<div></div>
</div>
<div data-portal-id="modal-Polarisportal174">
<div></div>
</div>
<div data-portal-id="modal-Polarisportal175">
<div>
<div class="Polaris-Modal-Dialog__Container_13mbo" data-polaris-layer="true" data-polaris-overlay="true">
<div>
    <div role="dialog" aria-labelledby="Polarismodal-header32" tabindex="-1" class="Polaris-Modal-Dialog_n3qgo">
        <div class="Polaris-Modal-Dialog__Modal_2v9yc">
            <div class="Polaris-Modal-Header_z4uwg">
                <div id="Polarismodal-header32" class="Polaris-Modal-Header__Title_2qj8j">
                    <h2 class="Polaris-DisplayText_1u0t8 Polaris-DisplayText--sizeSmall_7647q">Manage sales channel visibility</h2>
                </div><button class="Polaris-Modal-CloseButton_bl13t" aria-label="Close" onclick="close_manage()"><span class="Polaris-Icon_yj27d Polaris-Icon--colorInkLighter_2s08r Polaris-Icon--isColored_uhqnf Polaris-Icon--newDesignLanguage_1rik8"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                            <path d="M11.414 10l6.293-6.293a1 1 0 1 0-1.414-1.414L10 8.586 3.707 2.293a1 1 0 0 0-1.414 1.414L8.586 10l-6.293 6.293a1 1 0 1 0 1.414 1.414L10 11.414l6.293 6.293A.998.998 0 0 0 18 17a.999.999 0 0 0-.293-.707L11.414 10z"></path>
                        </svg></span></button>
            </div>
            <div class="Polaris-Modal__BodyWrapper_1kb1f">
                <div class="Polaris-Modal__Body_yjdx1 Polaris-Scrollable_1ed9o Polaris-Scrollable--vertical_uiuuj" data-polaris-scrollable="true">
                    <section class="Polaris-Modal-Section_1b1h1"><label class="Polaris-Choice_j5gzq" for="gid-shopify-publication-133890049"><span class="Polaris-Choice__Control_1u8vs"><span class="Polaris-Checkbox_1d6zr Polaris-Checkbox--newDesignLanguage_1rik8"><input id="gid-shopify-publication-133890049" type="checkbox" class="Polaris-Checkbox__Input_30ock" aria-invalid="false" role="checkbox" aria-checked="true" value="" checked=""><span class="Polaris-Checkbox__Backdrop_1x2i2"></span><span class="Polaris-Checkbox__Icon_yj27d"><span class="Polaris-Icon_yj27d Polaris-Icon--newDesignLanguage_1rik8"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                                                <path d="M8.315 13.859l-3.182-3.417a.506.506 0 0 1 0-.684l.643-.683a.437.437 0 0 1 .642 0l2.22 2.393 4.942-5.327a.436.436 0 0 1 .643 0l.643.684a.504.504 0 0 1 0 .683l-5.91 6.35a.437.437 0 0 1-.642 0"></path>
                                            </svg></span></span></span></span><span class="Polaris-Choice__Label_2vd36">Online Store</span></label></section>
                    <section class="Polaris-Modal-Section_1b1h1"><label class="Polaris-Choice_j5gzq" for="gid-shopify-publication-8816197681"><span class="Polaris-Choice__Control_1u8vs"><span class="Polaris-Checkbox_1d6zr Polaris-Checkbox--newDesignLanguage_1rik8"><input id="gid-shopify-publication-8816197681" type="checkbox" class="Polaris-Checkbox__Input_30ock" aria-invalid="false" role="checkbox" aria-checked="true" value="" checked=""><span class="Polaris-Checkbox__Backdrop_1x2i2"></span><span class="Polaris-Checkbox__Icon_yj27d"><span class="Polaris-Icon_yj27d Polaris-Icon--newDesignLanguage_1rik8"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                                                <path d="M8.315 13.859l-3.182-3.417a.506.506 0 0 1 0-.684l.643-.683a.437.437 0 0 1 .642 0l2.22 2.393 4.942-5.327a.436.436 0 0 1 .643 0l.643.684a.504.504 0 0 1 0 .683l-5.91 6.35a.437.437 0 0 1-.642 0"></path>
                                            </svg></span></span></span></span><span class="Polaris-Choice__Label_2vd36">Akeneo</span></label></section>
                    <section class="Polaris-Modal-Section_1b1h1"><label class="Polaris-Choice_j5gzq" for="gid-shopify-publication-42277109809"><span class="Polaris-Choice__Control_1u8vs"><span class="Polaris-Checkbox_1d6zr Polaris-Checkbox--newDesignLanguage_1rik8"><input id="gid-shopify-publication-42277109809" type="checkbox" class="Polaris-Checkbox__Input_30ock" aria-invalid="false" role="checkbox" aria-checked="true" value="" checked=""><span class="Polaris-Checkbox__Backdrop_1x2i2"></span><span class="Polaris-Checkbox__Icon_yj27d"><span class="Polaris-Icon_yj27d Polaris-Icon--newDesignLanguage_1rik8"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                                                <path d="M8.315 13.859l-3.182-3.417a.506.506 0 0 1 0-.684l.643-.683a.437.437 0 0 1 .642 0l2.22 2.393 4.942-5.327a.436.436 0 0 1 .643 0l.643.684a.504.504 0 0 1 0 .683l-5.91 6.35a.437.437 0 0 1-.642 0"></path>
                                            </svg></span></span></span></span><span class="Polaris-Choice__Label_2vd36">Point of Sale</span></label></section>
                    <section class="Polaris-Modal-Section_1b1h1"><label class="Polaris-Choice_j5gzq" for="gid-shopify-publication-44147802161"><span class="Polaris-Choice__Control_1u8vs"><span class="Polaris-Checkbox_1d6zr Polaris-Checkbox--newDesignLanguage_1rik8"><input id="gid-shopify-publication-44147802161" type="checkbox" class="Polaris-Checkbox__Input_30ock" aria-invalid="false" role="checkbox" aria-checked="true" value="" checked=""><span class="Polaris-Checkbox__Backdrop_1x2i2"></span><span class="Polaris-Checkbox__Icon_yj27d"><span class="Polaris-Icon_yj27d Polaris-Icon--newDesignLanguage_1rik8"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                                                <path d="M8.315 13.859l-3.182-3.417a.506.506 0 0 1 0-.684l.643-.683a.437.437 0 0 1 .642 0l2.22 2.393 4.942-5.327a.436.436 0 0 1 .643 0l.643.684a.504.504 0 0 1 0 .683l-5.91 6.35a.437.437 0 0 1-.642 0"></path>
                                            </svg></span></span></span></span><span class="Polaris-Choice__Label_2vd36">app_graphql</span></label></section>
                    <section class="Polaris-Modal-Section_1b1h1"><label class="Polaris-Choice_j5gzq" for="gid-shopify-publication-44148391985"><span class="Polaris-Choice__Control_1u8vs"><span class="Polaris-Checkbox_1d6zr Polaris-Checkbox--newDesignLanguage_1rik8"><input id="gid-shopify-publication-44148391985" type="checkbox" class="Polaris-Checkbox__Input_30ock" aria-invalid="false" role="checkbox" aria-checked="true" value="" checked=""><span class="Polaris-Checkbox__Backdrop_1x2i2"></span><span class="Polaris-Checkbox__Icon_yj27d"><span class="Polaris-Icon_yj27d Polaris-Icon--newDesignLanguage_1rik8"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                                                <path d="M8.315 13.859l-3.182-3.417a.506.506 0 0 1 0-.684l.643-.683a.437.437 0 0 1 .642 0l2.22 2.393 4.942-5.327a.436.436 0 0 1 .643 0l.643.684a.504.504 0 0 1 0 .683l-5.91 6.35a.437.437 0 0 1-.642 0"></path>
                                            </svg></span></span></span></span><span class="Polaris-Choice__Label_2vd36">graphql_permission</span></label></section>
                </div>
            </div>
            <div class="Polaris-Modal-Footer_z4ij5">
                <div class="Polaris-Modal-Footer__FooterContent_pymp5">
                    <div class="Polaris-Stack_32wu2 Polaris-Stack--alignmentCenter_1rtaw">
                        <div class="Polaris-Stack__Item_yiyol Polaris-Stack__Item--fill_vpuzt"></div>
                        <div class="Polaris-Stack__Item_yiyol">
                            <div class="Polaris-ButtonGroup_yy85z">
                                <div class="Polaris-ButtonGroup__Item_yiyol"><button class="Polaris-Button_r99lw Polaris-Button--newDesignLanguage_1rik8" type="button" onclick="close_manage()"><span class="Polaris-Button__Content_xd1mk"><span class="Polaris-Button__Text_yj3uv">Cancel</span></span></button></div>
                                <div class="Polaris-ButtonGroup__Item_yiyol"><button class="Polaris-Button_r99lw Polaris-Button--newDesignLanguage_1rik8 Polaris-Button--primary_7k9zs" type="button" onclick="close_manage()"><span class="Polaris-Button__Content_xd1mk"><span class="Polaris-Button__Text_yj3uv">Done</span></span></button></div>
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
<div data-portal-id="modal-Polarisportal176">
<div></div>
</div>
<div data-portal-id="tooltip-Polarisportal177"></div>
<div data-portal-id="popover-Polarisportal178"></div>
<div data-portal-id="tooltip-Polarisportal179"></div>
<div data-portal-id="tooltip-Polarisportal180"></div>
<div data-portal-id="tooltip-Polarisportal181"></div>
<div data-portal-id="tooltip-Polarisportal182"></div>
<div data-portal-id="tooltip-Polarisportal183"></div>
<div data-portal-id="tooltip-Polarisportal184"></div>
<div data-portal-id="tooltip-Polarisportal185"></div>
<div data-portal-id="tooltip-Polarisportal186"></div>
<div data-portal-id="popover-Polarisportal187"></div>
<div data-portal-id="tooltip-Polarisportal188"></div>
<div data-portal-id="popover-Polarisportal189"></div>
<div data-portal-id="tooltip-Polarisportal190"></div>
<div data-portal-id="popover-Polarisportal191"></div>
<div data-portal-id="tooltip-Polarisportal192"></div>
<div data-portal-id="tooltip-Polarisportal193"></div>
<div data-portal-id="tooltip-Polarisportal194"></div>
<div data-portal-id="tooltip-Polarisportal195"></div>
<div data-portal-id="tooltip-Polarisportal196"></div>
<div data-portal-id="popover-Polarisportal197"></div>
</div>
<!--Mane pop over-->

<script>
    function call_manage() {
        document.getElementById('PolarisPortalsContainer-Manage').style.visibility = "visible";
    }
    function Display_Ad() {
        document.getElementById('Account_div').style.visibility = "visible";
    }
    function close_manage() {
        document.getElementById('PolarisPortalsContainer-Manage').style.visibility = "hidden";
    }
    function Close_Ad() {
        document.getElementById('Account_div').style.visibility = "hidden";
    }
</script>

@endsection