@extends('layouts.admin')
@section('title', 'Update Product')
@section('content')

<script src="https://cdn.ckeditor.com/4.17.2/standard/ckeditor.js"></script>

<link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/vendors~Admin~internal~section-flow~section-flow-summary~section-flow-template-installer~section-flo~67560caa-
da74327255a921063014b93a350cde95232ab12445903cd4c054dd790b472f56.css" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
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

<div class="Polaris-Frame__ContextualSaveBar_14m7v Polaris-Frame-CSSAnimation--startFade_1gu4x"></div>
<main class="Polaris-Frame__Main_yj28s Polaris-Frame__Main--newDesignLanguage_129jf" id="AppFrameMain" data-has-global-ribbon="false"><a id="AppFrameMainContent" tabindex="-1"></a>
<div class="Polaris-Frame__Content_xd1mk">
<div class="Polaris-Page_yisnh Polaris-Page--newDesignLanguage_1rik8">
<div class="Polaris-Page-Header_z4uwg Polaris-Page-Header--hasNavigation_gfpa8 Polaris-Page-Header--hasActionMenu_1wx04 Polaris-Page-Header--mobileView_i07vm Polaris-Page-Header--newDesignLanguage_1rik8 Polaris-Page-Header--mediumTitle_bfol6">
<div class="Polaris-Page-Header__Row_375v7 Polaris-Page-Header__RowCondensed_1gexu">
<div class="Polaris-Page-Header__BreadcrumbWrapper_1tgwk Polaris-Page-Header--newDesignLanguage_1rik8">
<nav role="navigation"><a data-polaris-unstyled="true" class="Polaris-Breadcrumbs__Breadcrumb_llsun Polaris-Breadcrumbs--newDesignLanguage_1rik8" href="/products"><span class="Polaris-Breadcrumbs__ContentWrapper_1yvfo"><span class="Polaris-Breadcrumbs__Icon_yj27d"><span class="Polaris-Icon_yj27d Polaris-Icon--newDesignLanguage_1rik8"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
<path d="M17 9H5.414l3.293-3.293a.999.999 0 1 0-1.414-1.414l-5 5a.999.999 0 0 0 0 1.414l5 5a.997.997 0 0 0 1.414 0 .999.999 0 0 0 0-1.414L5.414 11H17a1 1 0 1 0 0-2z"></path>
</svg></span></span><span class="Polaris-VisuallyHidden_yrtt5">Products</span></span></a></nav>
</div>
<div class="Polaris-Page-Header__TitleWrapper_bejfn">
<div>
<div class="Polaris-Header-Title__TitleAndSubtitleWrapper_40sxf">
<div class="Polaris-Header-Title__TitleWithMetadataWrapper_pdqv7 Polaris-Header-Title--newDesignLanguage_1rik8">
<div class="Polaris-Header-Title_2qj8j">
<h1 class="Polaris-Header-Title--newDesignLanguageTitle_1wh8d">Update Product</h1>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="Polaris-Page-Header__Row_375v7">
<div class="Polaris-Page-Header__LeftAlign_1d6sz"></div>
<div class="Polaris-Page-Header__RightAlign_1ok1p">
<div class="Polaris-Page-Header__AdditionalNavigationWrapper_1kkex"></div>
</div>
</div>
</div>
<div class="Polaris-Page__Content_xd1mk">
<div class="_1j4h2">

    <form action="/update-product/{{$product->slug}}/success" method="post" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
<div class="Polaris-Layout_sl20u Polaris-Layout--newDesignLanguage_1rik8">
<div class="Polaris-Layout__Section_1b1h1"></div>
<div class="Polaris-Layout__Section_1b1h1">
<div class="Polaris-Card_yis1o Polaris-Card--newDesignLanguage_1rik8">
<div class="Polaris-Card__Section_1b1h1">
<div class="Polaris-FormLayout_1wntl">
<div class="Polaris-FormLayout__Item_yiyol">
<div class="">
<div class="Polaris-Labelled__LabelWrapper_bf6ys">
<div class="Polaris-Label_2vd36"><label id="PolarisTextField1Label" for="PolarisTextField1" class="Polaris-Label__Text_yj3uv">Title</label></div>
</div>
<div class="Polaris-Connected_wopc9 Polaris-Connected--newDesignLanguage_1rik8">
<div class="Polaris-Connected__Item_yiyol Polaris-Connected__Item--primary_rmh5m">
<div class="Polaris-TextField_1spwi Polaris-TextField--hasValue_1mx8d Polaris-TextField--newDesignLanguage_1rik8">
    
    <input name="name" value="{{$product->name}}" type="text" id="PolarisTextField1" required value="" placeholder="Short sleeve t-shirt" class="Polaris-TextField__Input_30ock" aria-labelledby="PolarisTextField1Label" aria-invalid="false" aria-multiline="false">

    <div class="Polaris-TextField__Backdrop_1x2i2"></div>
</div>
</div>
</div>
</div>
</div>

<div class="Polaris-FormLayout__Item_yiyol">
<div class="">
<div class="Polaris-Labelled__LabelWrapper_bf6ys">
<div class="Polaris-Label_2vd36"><label id="PolarisTextField16Label" for="PolarisTextField16" class="Polaris-Label__Text_yj3uv">Description</label></div>
</div>
<textarea required name="description" id="article-ckeditor" placeholder="" class="Polaris-TextField__Input_30ock ckeditor" aria-describedby="PolarisTextField16HelpText" aria-labelledby="PolarisTextField16Label" aria-invalid="false" aria-multiline="true" style="height: 108px;">{{$product->description}}</textarea>
<div class="Polaris-Connected_wopc9 Polaris-Connected--newDesignLanguage_1rik8">
<div class="Polaris-Connected__Item_yiyol Polaris-Connected__Item--primary_rmh5m">
<div class="Polaris-TextField_1spwi Polaris-TextField--multiline_1jgfe Polaris-TextField--newDesignLanguage_1rik8">
    
    

    <div class="Polaris-TextField__Backdrop_1x2i2"></div>
    <div aria-hidden="true" class="Polaris-TextField__Resizer_mlqsu">
        <div class="Polaris-TextField__DummyInput_1u3lq"><br></div>
        <div class="Polaris-TextField__DummyInput_1u3lq"><br><br><br><br></div>
    </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="_3O4hy">
<div>
<div class="_3FIEf">
<div class="Polaris-Card_yis1o Polaris-Card--newDesignLanguage_1rik8">
<div class="_2Kae1">
<div class="_35Jfm">
<h2 class="Polaris-Heading_1brcv">Media</h2>
</div>
<div></div>
</div>
<!--Addurl--><div class="Polaris-Modal-Dialog__Container_13mbo" id="Polaris-Modal-Dialog__Container_13mbo" data-polaris-layer="true" data-polaris-overlay="true" style="visibility: hidden;">
    <div>
        <div role="dialog" aria-labelledby="Polarismodal-header18" tabindex="-1" class="Polaris-Modal-Dialog_n3qgo">
            <div class="Polaris-Modal-Dialog__Modal_2v9yc">
                <div class="Polaris-Modal-Header_z4uwg">
                    <div id="Polarismodal-header18" class="Polaris-Modal-Header__Title_2qj8j">
                        <h2 class="Polaris-DisplayText_1u0t8 Polaris-DisplayText--sizeSmall_7647q">Add image from URL</h2>
                    </div><button class="Polaris-Modal-CloseButton_bl13t" aria-label="Close" onclick="closeurl()" type="button"><span class="Polaris-Icon_yj27d Polaris-Icon--colorInkLighter_2s08r Polaris-Icon--isColored_uhqnf Polaris-Icon--newDesignLanguage_1rik8"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                                <path d="M11.414 10l6.293-6.293a1 1 0 1 0-1.414-1.414L10 8.586 3.707 2.293a1 1 0 0 0-1.414 1.414L8.586 10l-6.293 6.293a1 1 0 1 0 1.414 1.414L10 11.414l6.293 6.293A.998.998 0 0 0 18 17a.999.999 0 0 0-.293-.707L11.414 10z"></path>
                            </svg></span></button>
                </div>
                <div class="Polaris-Modal__BodyWrapper_1kb1f">
                    <div class="Polaris-Modal__Body_yjdx1 Polaris-Scrollable_1ed9o Polaris-Scrollable--vertical_uiuuj" data-polaris-scrollable="true">
                        <section class="Polaris-Modal-Section_1b1h1">
                            <div class="Polaris-Stack_32wu2 Polaris-Stack--vertical_uiuuj">
                                <div class="Polaris-Stack__Item_yiyol">
                                    <div class="">
                                        <div class="Polaris-Labelled__LabelWrapper_bf6ys">
                                            <div class="Polaris-Label_2vd36"><label id="PolarisTextField16Label" for="PolarisTextField16" class="Polaris-Label__Text_yj3uv">Paste image URL</label></div>
                                        </div>
                                        <div class="Polaris-Connected_wopc9 Polaris-Connected--newDesignLanguage_1rik8">
                                            <div class="Polaris-Connected__Item_yiyol Polaris-Connected__Item--primary_rmh5m">
                                                <div class="Polaris-TextField_1spwi Polaris-TextField--newDesignLanguage_1rik8"><input id="PolarisTextField16" placeholder="https://" class="Polaris-TextField__Input_30ock" aria-labelledby="PolarisTextField16Label" aria-invalid="false" aria-multiline="false" value="">
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
                                    <div class="Polaris-ButtonGroup__Item_yiyol"><button class="Polaris-Button_r99lw Polaris-Button--newDesignLanguage_1rik8" type="button" onclick="closeurl()"><span class="Polaris-Button__Content_xd1mk"><span class="Polaris-Button__Text_yj3uv">Cancel</span></span></button></div>
                                    <div class="Polaris-ButtonGroup__Item_yiyol"><button class="Polaris-Button_r99lw Polaris-Button--newDesignLanguage_1rik8 Polaris-Button--primary_7k9zs" type="submit" onclick=""><span class="Polaris-Button__Content_xd1mk"><span class="Polaris-Button__Text_yj3uv">Add media</span></span></button></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Addurl-->
<script>
    function openurl()
    {
        
    document.getElementById('Polaris-Modal-Dialog__Container_13mbo').style.visibility="visible";
    }
    function closeurl()
    {
        
    document.getElementById('Polaris-Modal-Dialog__Container_13mbo').style.visibility="hidden";
    }
    </script>
    
    <div class="_2ETKe"></div>
    <div class="_2wJuJ">
    <div class="Polaris-Card__Section_1b1h1">
    <div class="Polaris-Labelled--hidden_riqie">
    <div class="Polaris-Labelled__LabelWrapper_bf6ys">
        <div class="Polaris-Label_2vd36"><label id="PolarisDropZone4Label" for="PolarisDropZone4" class="Polaris-Label__Text_yj3uv">Upload file</label></div>
    </div>
    <div class="Polaris-DropZone_1ehhx Polaris-DropZone--newDesignLanguage_1rik8 Polaris-DropZone--sizeExtraLarge_1akox" aria-disabled="false">
        <div class="Polaris-DropZone__Container_13mbo">
            <div class="_HQ0f">
                <div class="_15Gq9 pyQ8u">
                    <div class="_24J4T"></div>
                    <div class="_24J4T"></div>
                    <div class="_24J4T"></div>
                    <div class="_24J4T"></div>
                    <div class="_24J4T"></div>
                </div>
                <div class="_15Gq9">
                    
                    <div class="HM1EI" id="Display1" style="overflow: hidden;"><button type="button" class="_1q_T1"><span class="QfaYE"><label><input type="file"  accept="image/*" name="image" required id="file1"  onchange="loadFile(event)" style="display: none;">Add Media</label></span><span class="_20LrM">or drop files to upload</span><p id="output"></p></button></div>
                    
                    <div class="HM1EI"style="overflow: hidden;"><button type="button" class="_1q_T1"><span class="QfaYE"><label><input type="file" name="image1" required accept="image/*" id="file2"  onchange="loadFile1(event)" style="display: none;">Add Media</label></span><span class="_20LrM">or drop files to upload<br><p id="output1"></p></span></button></div>
                    
                    <div class="HM1EI"style="overflow: hidden;"><button type="button" class="_1q_T1"><span class="QfaYE"><label><input type="file" name="image2" required accept="image/*" id="file3"  onchange="loadFile2(event)" style="display: none;">Add Media</label></span><span class="_20LrM">or drop files to upload<br><p id="output2"></p></span></button></div>
                    
                    <div class="HM1EI"style="overflow: hidden;"><button type="button" class="_1q_T1"><span class="QfaYE"><label><input type="file" name="image3" required accept="image/*" id="file4"  onchange="loadFile3(event)" style="display: none;">Add Media</label></span><span class="_20LrM">or drop files to upload<br><p id="output3"></p></span></button></div>
                    
                    <div class="HM1EI"style="overflow: hidden;"><button type="button" class="_1q_T1"><span class="QfaYE"><label>Add Media</label></span><span class="_20LrM">or drop files to upload<br><p id="output4"></p></span></button></div>
                </div>
            </div>
        </div><span class="Polaris-VisuallyHidden_yrtt5"><input id="PolarisDropZone4" type="file" multiple="" autocomplete="off"></span>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="_2qQgE">
<div data-hydration-id="./app/sections/Products/components/VariantsCard/VariantsCard.tsx2">
<div class="Polaris-Card_yis1o Polaris-Card--newDesignLanguage_1rik8">
<div class="Polaris-Card__Header_z4uwg">
<div class="Polaris-Stack_32wu2 Polaris-Stack--alignmentBaseline_aupj5">
<div class="Polaris-Stack__Item_yiyol Polaris-Stack__Item--fill_vpuzt">
<h2 class="Polaris-Heading_1brcv">Product Price</h2>
</div>
</div>
</div>
<div class="Polaris-Card__Section_1b1h1">
    <div class="Polaris-FormLayout_1wntl">
        
        <div role="group" class="Polaris-FormLayout--grouped_17srt">
            <div class="Polaris-FormLayout__Items_38lvu">
                <div class="Polaris-FormLayout__Item_yiyol">
                    <div class="">
                        <div class="Polaris-Labelled__LabelWrapper_bf6ys">
                            <div class="Polaris-Label_2vd36"><label id="InventoryCardSkuLabel" for="InventoryCardSku" class="Polaris-Label__Text_yj3uv">Price</label></div>
                        </div>
                        <div class="Polaris-Connected_wopc9 Polaris-Connected--newDesignLanguage_1rik8">
                            <div class="Polaris-Connected__Item_yiyol Polaris-Connected__Item--primary_rmh5m">
                                <div class="Polaris-TextField_1spwi Polaris-TextField--newDesignLanguage_1rik8">
                                    
                                    <input name="price" required type="text" id="InventoryCardSku" class="Polaris-TextField__Input_30ock" aria-labelledby="InventoryCardSkuLabel" aria-invalid="false" aria-multiline="false" value="{{$product->price}}">

                                    <div class="Polaris-TextField__Backdrop_1x2i2"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="Polaris-FormLayout__Item_yiyol">
                    <div class="">
                        <div class="Polaris-Labelled__LabelWrapper_bf6ys">
                            <div class="Polaris-Label_2vd36"><label id="InventoryCardBarcodeLabel" for="InventoryCardBarcode" class="Polaris-Label__Text_yj3uv">Discounted Price</label></div>
                        </div>
                        <div class="Polaris-Connected_wopc9 Polaris-Connected--newDesignLanguage_1rik8">
                            <div class="Polaris-Connected__Item_yiyol Polaris-Connected__Item--primary_rmh5m">
                                <div class="Polaris-TextField_1spwi Polaris-TextField--newDesignLanguage_1rik8">
                                    
                                    <input name="dprice" required type="text" id="InventoryCardBarcode" class="Polaris-TextField__Input_30ock" aria-labelledby="InventoryCardBarcodeLabel" aria-invalid="false" aria-multiline="false" value="{{$product->discounted_price}}">

                                    <div class="Polaris-TextField__Backdrop_1x2i2"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div role="group" class="Polaris-FormLayout--grouped_17srt">
            <div class="Polaris-FormLayout__Items_38lvu">
                <div class="Polaris-FormLayout__Item_yiyol">
                    <div class="">
                        <div class="Polaris-Labelled__LabelWrapper_bf6ys">
                            <div class="Polaris-Label_2vd36"><label id="InventoryCardSkuLabel" for="InventoryCardSku" class="Polaris-Label__Text_yj3uv">In Sale</label></div>
                        </div>
                        <div class="Polaris-Connected_wopc9 Polaris-Connected--newDesignLanguage_1rik8">
                            <div class="Polaris-Connected__Item_yiyol Polaris-Connected__Item--primary_rmh5m">
                                <div class="Polaris-TextField_1spwi Polaris-TextField--newDesignLanguage_1rik8">
                                    
                                    <input name="in_sale" required placeholder="Yes/No" type="text" id="InventoryCardSku" class="Polaris-TextField__Input_30ock" aria-labelledby="InventoryCardSkuLabel" aria-invalid="false" aria-multiline="false" value="{{$product->in_sale}}">

                                    <div class="Polaris-TextField__Backdrop_1x2i2"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="Polaris-FormLayout__Item_yiyol">
                    <div class="">
                        <div class="Polaris-Labelled__LabelWrapper_bf6ys">
                            <div class="Polaris-Label_2vd36"><label id="InventoryCardSkuLabel" for="InventoryCardSku" class="Polaris-Label__Text_yj3uv">Is Featured</label></div>
                        </div>
                        <div class="Polaris-Connected_wopc9 Polaris-Connected--newDesignLanguage_1rik8">
                            <div class="Polaris-Connected__Item_yiyol Polaris-Connected__Item--primary_rmh5m">
                                <div class="Polaris-TextField_1spwi Polaris-TextField--newDesignLanguage_1rik8">
                                    
                                    <input name="is_featured" required placeholder="Yes/No" type="text" id="InventoryCardSku" class="Polaris-TextField__Input_30ock" aria-labelledby="InventoryCardSkuLabel" aria-invalid="false" aria-multiline="false" value="{{$product->is_featured}}">

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
<div></div>
</div>

<div data-hydration-id="./app/sections/Products/components/Metafields/Metafields.tsx2"></div>
<div></div>
</div>
<div class="Polaris-Layout__Section_1b1h1 Polaris-Layout__Section--secondary_1sx8i">
<div class="Polaris-Card_yis1o Polaris-Card--newDesignLanguage_1rik8">


<div class="Polaris-Card__Section_1b1h1">
<div class="Polaris-Card__SectionHeader_1aytf">
<h3 aria-label="Collections" class="Polaris-Subheading_syouu">Category</h3>
</div>
<div class="Polaris-Stack_32wu2 Polaris-Stack--vertical_uiuuj Polaris-Stack--spacingExtraTight_gv6hw">
<div class="Polaris-Stack__Item_yiyol">
<div>
<div>
<div class="">
    
  
  <div class="Polaris-Connected_wopc9 Polaris-Connected--newDesignLanguage_1rik8">
      <div class="Polaris-Connected__Item_yiyol Polaris-Connected__Item--primary_rmh5m">
        <select name="category_id" required id="category" class="category" style="width: 100%; height: 40px;font-size: 16px;padding-left: 10px;font-weight: 100; border: 1px solid #C9CCCF; border-radius: 5px;color: dimgrey;">
                              <option>Select Category</option>                          
                              @foreach ($categories as $category)
        <option @if ($product->category_id == $category->id) selected @endif
                                value="{{$category->id}}">{{$category->name}}</option>
                              @endforeach
        </select>
      </div>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      
                            <script>
                                $(document).ready(function(){
									$("#category").change(function(){
										var query = $(this).val();
										
											$.ajaxSetup({
											headers: {
												'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
											}
											})
											$.ajax({
												url:"/getsubcategory",
												method:"post",
												data:{query:query},
												success:function(data){
													for (n=0; n<data.length; n++){
														console.log(data[n])
														if(n==0)
															$('#subcategory').html(data[n]);
														else
															$('#subcategory').append(data[n]);
														}
													}
                                                
                                                	
											})
										
									});                                   
                                })
                                
							</script>
      




</div>
</div>
</div>
</div>
</div>
</div>
<div class="_2kYaN">
    </div>
</div>
<div class="Polaris-Card__Section_1b1h1">
<div class="Polaris-Card__SectionHeader_1aytf">
<h3 aria-label="Collections" class="Polaris-Subheading_syouu">Subcategory</h3>
</div>
<div class="Polaris-Stack_32wu2 Polaris-Stack--vertical_uiuuj Polaris-Stack--spacingExtraTight_gv6hw">
<div class="Polaris-Stack__Item_yiyol">
<div>
<div>
<div class="">
    
  
    <select name="subcategory_id" required id="subcategory" class="subcategory" style="width: 100%; height: 40px;font-size: 16px;padding-left: 10px;font-weight: 100; border: 1px solid #C9CCCF; border-radius: 5px;color: dimgrey;">
      
                            <option>Select Subcategory</option>
                            
      </select>
</div>
</div>
</div>
</div>
</div>
<div class="_2kYaN">
    </div>
</div>



<div class="Polaris-Card__Section_1b1h1">
    <div class="Polaris-Stack_32wu2 Polaris-Stack--spacingExtraTight_gv6hw Polaris-Stack--distributionEqualSpacing_x9cqm Polaris-Stack--alignmentBaseline_aupj5">
    <div class="Polaris-Stack__Item_yiyol">
    <h3 aria-label="Tags" class="Polaris-Subheading_syouu">Stock</h3>
    </div>
    </div>
    <div class="_3eMy7">
    <div>
    <div>
    <div class="Polaris-Labelled--hidden_riqie">
    <div class="Polaris-Labelled__LabelWrapper_bf6ys">
    <div class="Polaris-Label_2vd36"><label id="PolarisTextField5Label" for="PolarisTextField5" class="Polaris-Label__Text_yj3uv">Edit tags</label></div>
    </div>
    <div class="Polaris-Connected_wopc9 Polaris-Connected--newDesignLanguage_1rik8">
    <div class="Polaris-Connected__Item_yiyol Polaris-Connected__Item--primary_rmh5m">
        <div class="Polaris-TextField_1spwi Polaris-TextField--newDesignLanguage_1rik8">
            
            <input name="stock" required type="text" id="PolarisTextField5" placeholder="Enter Stock Number" autocomplete="off" class="Polaris-TextField__Input_30ock" aria-labelledby="PolarisTextField5Label" aria-invalid="false" aria-multiline="false" value="{{$product->stock}}" aria-autocomplete="list" role="combobox" autocapitalize="off" aria-expanded="false" aria-controls="Autocomplete4-disclosure" tabindex="0" aria-owns="Polarispopover15">
    
            <div class="Polaris-TextField__Backdrop_1x2i2"></div>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="_2kYaN">
    </div>
    </div>
    </div>

</div>
</div>
<div class="Polaris-Layout__Section_1b1h1">
<div class="Polaris-PageActions_fcnua">
<div class="Polaris-Stack_32wu2 Polaris-Stack--spacingTight_1o4d6 Polaris-Stack--distributionEqualSpacing_x9cqm">
<div class="Polaris-Stack__Item_yiyol">
<div class="Polaris-ButtonGroup_yy85z">
<div class="Polaris-ButtonGroup__Item_yiyol"></div>
<div class="Polaris-ButtonGroup__Item_yiyol"></div>
</div>
</div>
<div class="Polaris-Stack__Item_yiyol">
<button class="Polaris-Button_r99lw Polaris-Button--newDesignLanguage_1rik8 Polaris-Button--primary_7k9zs" type="submit"><span class="Polaris-Button__Content_xd1mk"><span class="Polaris-Button__Text_yj3uv">Update</span></span></button></div>

</div>
</div>
</div><span class="Polaris-VisuallyHidden_yrtt5"><input type="submit"></span>
</div><span class="Polaris-VisuallyHidden_yrtt5"><button type="submit" aria-hidden="true" tabindex="-1">Submit</button></span>
</form>
</div>
</div>
</div>
</div>
</main>
</div>
</div>
<div id="PolarisPortalsContainer">
<div data-portal-id="popover-Polarisportal22"></div>
<div data-portal-id="tooltip-Polarisportal23"></div>
<div data-portal-id="popover-Polarisportal24"></div>
<div data-portal-id="tooltip-Polarisportal25"></div>
<div data-portal-id="tooltip-Polarisportal26"></div>
<div data-portal-id="tooltip-Polarisportal27"></div>
<div data-portal-id="tooltip-Polarisportal28"></div>
<div data-portal-id="tooltip-Polarisportal29"></div>
<div data-portal-id="tooltip-Polarisportal30"></div>
<div data-portal-id="tooltip-Polarisportal31"></div>
<div data-portal-id="tooltip-Polarisportal32"></div>
<div data-portal-id="popover-Polarisportal33"></div>
<div data-portal-id="tooltip-Polarisportal34"></div>
<div data-portal-id="popover-Polarisportal35"></div>
<div data-portal-id="tooltip-Polarisportal36"></div>
<div data-portal-id="popover-Polarisportal37"></div>
<div data-portal-id="tooltip-Polarisportal38"></div>
<div data-portal-id="tooltip-Polarisportal39"></div>
<div data-portal-id="tooltip-Polarisportal40"></div>
<div data-portal-id="tooltip-Polarisportal41"></div>
<div data-portal-id="modal-Polarisportal1">
<div></div>
</div>
<div data-portal-id="modal-Polarisportal2">
<div></div>
</div>
<div data-portal-id="modal-Polarisportal3">
<div></div>
</div>
<div data-portal-id="modal-Polarisportal4">
<div></div>
</div>
<div data-portal-id="popover-Polarisportal42"></div>
<div data-portal-id="modal-Polarisportal5">
<div></div>
</div>
<div data-portal-id="modal-Polarisportal6">
<div></div>
</div>
<div data-portal-id="modal-Polarisportal7">
<div></div>
</div>
<div data-portal-id="modal-Polarisportal8">
<div></div>
</div>
<div data-portal-id="popover-Polarisportal43"></div>
<div data-portal-id="modal-Polarisportal9">
<div></div>
</div>
<div data-portal-id="popover-Polarisportal44"></div>
<div data-portal-id="modal-Polarisportal10">
<div></div>
</div>
<div data-portal-id="modal-Polarisportal11">
<div></div>
</div>
<div data-portal-id="popover-Polarisportal45"></div>
<div data-portal-id="popover-Polarisportal46"></div>
<div data-portal-id="popover-Polarisportal47"></div>
<div data-portal-id="modal-Polarisportal12">
<div></div>
</div>
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
<div data-portal-id="chromeless-remote-modal-Polarisportal18">
<div>
<div></div>
</div>
</div>
<div data-portal-id="modal-Polarisportal19">
<div></div>
</div>
<div data-portal-id="modal-Polarisportal20">
<div></div>
</div>
<div data-portal-id="Polarisportal21">
<div class="Polaris-Frame-ToastManager_1utvc" aria-live="polite"></div>
</div>
<div data-portal-id="popover-Polarisportal48"></div>
<div data-portal-id="popover-Polarisportal49"></div>
<div data-portal-id="modal-Polarisportal52">
<div></div>
</div>
<div data-portal-id="popover-Polarisportal53"></div>
<div data-portal-id="popover-Polarisportal54"></div>
<div data-portal-id="popover-Polarisportal55"></div>
<div data-portal-id="popover-Polarisportal56"></div>
</div>
</div>
</div>

<script>
    var loadFile = function(event) {
        var image1 = document.getElementById('output');
        var fi1= document.getElementById("file1");
        var img1=URL.createObjectURL(event.target.files[0]);
        image1.innerHTML= fi1.files.item(0).name;
        document.getElementById('Display1').style.backgroundImage= "url(" + img1 + ") no-repeat";
    };
    var loadFile1 = function(event) {
        var image2 = document.getElementById('output1');
        var fi2= document.getElementById("file2");
        var img2=URL.createObjectURL(event.target.files[0]);
        image2.innerHTML= fi2.files.item(0).name;
        document.getElementById('Display2').style.backgroundImage= "url(" + img2 + ") no-repeat";
    };
    var loadFile2 = function(event) {
        var image3 = document.getElementById('output2');
        var fi3= document.getElementById("file3");
        var img3=URL.createObjectURL(event.target.files[0]);
        image3.innerHTML= fi3.files.item(0).name;
        document.getElementById('Display3').style.backgroundImage= "url(" + img3 + ") no-repeat";
    };
    var loadFile3 = function(event) {
        var image4 = document.getElementById('output3');
        var fi4= document.getElementById("file4");
        var img4=URL.createObjectURL(event.target.files[0]);
        image4.innerHTML= fi4.files.item(0).name;
        document.getElementById('Display4').style.backgroundImage= "url(" + img4 + ") no-repeat";
    };
    var loadFile4 = function(event) {
        var image5 = document.getElementById('output4');
        var fi5= document.getElementById("file5");
        var img5=URL.createObjectURL(event.target.files[0]);
        image5.innerHTML= fi5.files.item(0).name;
        document.getElementById('Display5').style.backgroundImage= "url(" + img5+ ") no-repeat";
    };
    </script>
    
<script>
    function Display_Ad() {
        document.getElementById('Account_div').style.visibility = "visible";
    }
    function Close_Ad() {
        document.getElementById('Account_div').style.visibility = "hidden";
    }
    function varient(){
        if(document.getElementById('varientCheckbox').checked==true)
            {
                document.getElementById('Polaris-ResourceList_r589e').style.display="block";
            }
        else{
                document.getElementById('Polaris-ResourceList_r589e').style.display="none";
            
        }
    }
</script>

@endsection