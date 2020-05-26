@extends('layouts.admin') 

@php($title = 'Create User') 
@push('title',yieldTitle($title)) 

@section('breadcrumb-title', $title)

@push('content-class', 'content-fixed')
@push('container-class','container-fluid')

@section('content')

<div class="container section-side">
    <div class="row">
      <div class="col-lg-3 col-md-3  col-sm-12 col-xs-12">
        <nav class="navigation" id="mainNav">
            <li><a href="#introduction" class="navigation__link parent active">Introduction</a></li>
            <li><a href="#before-you-submit" class="navigation__link parent">Before You Submit</a></li>
            <li><a href="#safety" class="navigation__link parent">1. Safety</a>
                <ul class="sidenav_item_children">
                    <li><a href="#objectionable-content" class="navigation__link child">1.1 Objectionable Content</a> 
                    </li>
                    <li><a href="#user-generated-content" class="navigation__link child">1.2 User Generated Content</a></li>
                    <li><a href="#kids-category" class="navigation__link child">1.3 Kids Category</a></li>
                    <li><a href="#physical-harm" class="navigation__link child">1.4 Physical Harm</a></li>
                    <li><a href="#developer-information" class="navigation__link child">1.5 Developer Information</a> <!----></li>
                    <li><a href="#data-security" class="navigation__link child">1.6 Data Security</a></li>
                </ul>
            </li>
            <li><a href="#performance" class="navigation__link parent">2. Performance</a>
                <ul class="sidenav_item_children">
                    <li><a href="#app-completeness" class="navigation__link child">2.1 App Completeness</a></li>
                    <li><a href="#beta-testing" class="navigation__link child">2.2 Beta Testing</a></li>
                    <li><a href="#accurate-metadata" class="navigation__link child">2.3 Accurate Metadata</a></li>
                    <li><a href="#hardware-compatibility" class="navigation__link child">2.4 Hardware Compatibility</a></li>
                    <li><a href="#software-requirements" class="navigation__link child">2.5 Software Requirements</a></li>
                </ul>

            </li>
            <li><a href="#business" class="navigation__link parent">3. Business</a>
                <ul class="sidenav_item_children">
                    <li><a href="#payments" class="navigation__link child">3.1 Payments</a></li>
                    <li><a href="#in-app-purchase" class="navigation__link child">3.1.1 In-App Purchase</a></li>
                    <li><a href="#subscriptions" class="navigation__link child">3.1.2 Subscriptions</a></li>
                    <li><a href="#reader-apps" class="navigation__link child">3.1.3(a) “Reader” Apps</a></li>
                    <li><a href="#multiplatform-services" class="navigation__link child">3.1.3(b) Multiplatform Services</a></li>
                    <li><a href="#hardware-specific-content" class="navigation__link child">3.1.4 Hardware-Specific Content</a></li>
                    <li><a href="#goods-and-services" class="navigation__link child">3.1.5(a) Goods and Services Outside of the App</a></li>
                    <li><a href="#cryptocurrencies" class="navigation__link child">3.1.5(b) Cryptocurrencies</a> </li>
                    <li><a href="#apple-pay" class="navigation__link child">3.1.6 Apple Pay</a></li>
                    <li><a href="#advertising" class="navigation__link child">3.1.7 Advertising</a></li>
                    <li><a href="#other-business" class="navigation__link child">3.2 Other Business Model Issues</a></li>
                    <li><a href="#acceptable" class="navigation__link child">3.2.1 Acceptable</a></li>
                    <li><a href="#unacceptable" class="navigation__link child">3.2.2 Unacceptable</a></li>
                </ul>
            </li>    
            <li><a href="#design" class="navigation__link parent">4. Design</a>
                <ul class="sidenav_item_children">
                    <li><a href="#copycats" class="navigation__link child">4.1 Copycats</a></li>
                    <li><a href="#minimum-functionality" class="navigation__link child">4.2 Minimum Functionality</a></li>
                    <li><a href="#spam" class="navigation__link child">4.3 Spam</a></li>
                    <li><a href="#extensions" class="navigation__link child">4.4 Extensions</a></li>
                    <li><a href="#apple-sites-and-services" class="navigation__link child">4.5 Apple Sites and Services</a></li>
                    <li><a href="#alternate-app-icons" class="navigation__link child">4.6 Alternate App Icons</a></li>
                    <li><a href="#games" class="navigation__link child">4.7 HTML5 Games, Bots, etc.</a></li>
                    <li><a href="#sign-in-with-apple" class="navigation__link child">4.8 Sign in with Apple</a></li>
                </ul>
            </li>
            <li><a href="#legal" class="navigation__link parent">5. Legal</a> 
                    <ul class="sidenav_item_children">
                        <li><a href="#privacy" class="navigation__link child">5.1 Privacy</a></li>
                        <li><a href="#data-collection-and-storage" class="navigation__link child">5.1.1 Data Collection and Storage</a></li>
                        <li><a href="#data-use-and-sharing" class="navigation__link child">5.1.2 Data Use and Sharing</a></li>
                        <li><a href="#health-and-health-research" class="navigation__link child">5.1.3 Health and Health Research</a></li>
                        <li><a href="#kids" class="navigation__link child">5.1.4 Kids</a></li>
                        <li><a href="#location-services" class="navigation__link child">5.1.5 Location Services</a></li>
                        <li><a href="#intellectual-property" class="navigation__link child">5.2 Intellectual Property</a></li>
                        <li><a href="#gaming" class="navigation__link child">5.3 Gaming, Gambling, and Lotteries</a></li>
                        <li><a href="#vpn-apps" class="navigation__link child">5.4 VPN Apps</a></li>
                        <li><a href="#mobile-device-management" class="navigation__link child">5.5 Mobile Device Management</a></li>
                        <li><a href="#developer-code-of-conduct" class="navigation__link child">5.6 Developer Code of Conduct</a></li>
                    </ul>
            </li>
            <li><a href="#after-you-submit" class="navigation__link parent">After You Submit</a></li>
        </nav>
    </div>

    <div class="col-lg-9 col-md-9  col-sm-12 col-xs-12 page_head">
        <div class="page-section" id="1">
          <h4 data-sidenav="" id="introduction">Introduction</h4>
              <p>The guiding principle of the App&nbsp;Store is simple - we want to provide a safe experience for users to get apps and a great opportunity for all developers to be successful. We do this by offering a highly curated App&nbsp;Store where every app is reviewed by experts and an editorial team helps users discover new apps every day. For everything else there is always the open Internet. If the App&nbsp;Store model and guidelines are not best for your app or business idea that’s okay, we provide Safari for a great web experience too.</p>
              <p>On the following pages you will find our latest guidelines arranged into five clear sections: Safety, Performance, Business, Design, and Legal. The App&nbsp;Store is always changing and improving to keep up with the needs of our customers and our products. Your apps should change and improve as well in order to stay on the <span class="nowrap">App&nbsp;Store.</span></p>
              <p>A few other points to keep in mind:</p>
              <ul class="disc top-level">
              <li>We have lots of kids downloading lots of apps. Parental controls work great to protect kids, but you have to do your part too. So know that we’re keeping an eye out for the kids.</li>
              <li>The App&nbsp;Store is a great way to reach hundreds of millions of people around the world. If you build an app that you just want to show to family and friends, the App&nbsp;Store isn’t the best way to do that. Consider using Xcode to install your app on a device for free or use Ad Hoc distribution available to <span class="nowrap">Apple Developer</span> Program members. If you’re just getting started, learn more about the <a href="#"><span class="nowrap">Apple Developer</span> Program</a>.</li>
              <li>We strongly support all points of view being represented on the <span class="nowrap">App&nbsp;Store,</span> as long as the apps are respectful to users with differing opinions and the quality of the app experience is great. We will reject apps for any content or behavior that we believe is over the line. What line, you ask? Well, as a Supreme Court Justice once said, “I’ll know it when I see it”. And we think that you will also know it when you cross it.</li>
              <li>If you attempt to cheat the system (for example, by trying to trick the review process, steal user data, copy another developer’s work, manipulate ratings or App&nbsp;Store discovery) your apps will be removed from the store and you will be expelled from the Developer Program.</li>
              <li>You are responsible for making sure everything in your app complies with these guidelines, including ad networks, analytics services, and third-party SDKs, so review and choose them carefully.</li>
              <li>Some features and technologies that are not generally available to developers may be offered as an entitlement for limited use cases. For example, we offer entitlements for CarPlay&nbsp;Audio, HyperVisor, and Privileged File Operations. Review our documentation on developer.apple.com to learn more about entitlements.</li>
              </ul>
              <p>We hope these guidelines help you sail through the App Review process, and that approvals and rejections remain consistent across the board. This is a living document; new apps presenting new questions may result in new rules at any time. Perhaps your app will trigger this. We love this stuff too, and honor what you do. We’re really trying our best to create the best platform in the world for you to express your talents and make a living, too.</p>
        </div>
        <div class="page-section" id="2">
            <h3 data-sidenav="" id="before-you-submit">Before You Submit</h3>
                <p>To help your app approval go as smoothly as possible, review the common missteps listed below that can slow down the review process or trigger a rejection. This doesn’t replace the guidelines or guarantee approval, but making sure you can check every item on the list is a good start. If your app no longer functions as intended or you’re no longer actively supporting it, it will be removed from the <span class="nowrap">App&nbsp;Store.</span> <a href="#">Learn more about App&nbsp;Store Improvements</a>.</p>
                <p>Make sure you:</p>
                <ul class="disc top-level">
                    <li>Test your app for crashes and bugs</li>
                    <li>Ensure that all app information and metadata is complete and accurate</li>
                    <li>Update your contact information in case App Review needs to reach you</li>
                    <li>Provide an active demo account and login information, plus any other hardware or resources that might be needed to review your app (e.g. login credentials or a sample QR code)</li>
                    <li>Enable backend services so that they’re live and accessible during review</li>
                    <li>Include detailed explanations of non-obvious features and in-app purchases in the App Review notes, including supporting documentation where appropriate.</li>
                    <li>Check whether your app follows guidance in other documentation, such as:</li>
                 </ul>

                <div id="documentation">
                    <p><strong>Development Guidelines</strong></p>
                        <ul class="links small">
                            <li class="document"><a href="#">App Programming Guide</a></li>
                            <li class="document"><a href="#">App Extension Programming Guide</a></li>
                            <li class="document"><a href="#">iOS Data Storage Guidelines</a></li>
                            <li class="document"><a href="#">macOS File System Documentation</a></li>
                            <li class="document"><a href="#">Safari App Extensions</a></li>
                            <li class="document"><a href="#"><span class="nowrap">App&nbsp;Store Connect</span> Help</a></li>
                        </ul>
                        <p><strong>Design Guidelines</strong></p>
                        <ul class="links small">
                            <li class="document"><a href="#">Human Interface Guidelines</a></li>
                        </ul>

                        <p><strong>Brand and Marketing Guidelines</strong></p>
                        <ul class="links small">
                            <li class="document"><a href="#">Marketing Resources and Identity Guidelines</a></li>
                            <li class="document"><a href="#">Apple Pay Identity Guidelines</a></li>
                            <li class="document"><a href="#">Add to Apple Wallet Guidelines</a></li>
                            <li class="document"><a href="#">Guidelines for Using Apple Trademarks and Copyrights</a></li>
                        </ul>
                </div>
        </div>
        <div class="page-section" id="3">
            <h3 data-sidenav="" id="safety"><span id="1"></span>1. Safety</h3>
                <p class="section-intro">When people install an app from the App&nbsp;Store, they want to feel confident that it’s safe to do so—that the app doesn’t contain upsetting or offensive content, won’t damage their device, and isn’t likely to cause physical harm from its use. We’ve outlined the major pitfalls below, but if you’re looking to shock and offend people, the App&nbsp;Store isn’t the right place for your app.</p>
        </div>
        <div class="page-section" id="4">
            <ul class="no-bullet">
                <li data-sidenav="1.1 Objectionable Content" id="objectionable-content"><span id="1.1"></span><strong>1.1 Objectionable Content</strong>
                    <p>Apps should not include content that is offensive, insensitive, upsetting, intended to disgust, in exceptionally poor taste, or just plain creepy. Examples of such content include:</p>
                    <ul class="no-bullet margin-top-small">
                    <li id="1.1.1"><strong>1.1.1</strong> Defamatory, discriminatory, or mean-spirited content, including references or commentary about religion, race, sexual orientation, gender, national/ethnic origin, or other targeted groups, particularly if the app is likely to humiliate, intimidate, or place a targeted individual or group in harm’s way. Professional political satirists and humorists are generally exempt from this requirement.</li>
                    <li id="1.1.2"><strong>1.1.2</strong> Realistic portrayals of people or animals being killed, maimed, tortured, or abused, or content that encourages violence. “Enemies” within the context of a game cannot solely target a specific race, culture, real government, corporation, or any other real entity.</li>
                    <li id="1.1.3"><strong>1.1.3</strong> Depictions that encourage illegal or reckless use of weapons and dangerous objects, or facilitate the purchase of firearms or ammunition.</li>
                    <li id="1.1.4"><strong>1.1.4</strong> Overtly sexual or pornographic material, defined by Webster’s Dictionary as "explicit descriptions or displays of sexual organs or activities intended to stimulate erotic rather than aesthetic or emotional feelings."</li>
                    <li id="1.1.5"><strong>1.1.5</strong> Inflammatory religious commentary or inaccurate or misleading quotations of religious texts.</li>
                    <li id="1.1.6"><strong>1.1.6</strong> False information and features, including inaccurate device data or trick/joke functionality, such as fake location trackers. Stating that the app is “for entertainment purposes” won’t overcome this guideline. Apps that enable anonymous or prank phone calls or SMS/MMS messaging will be rejected.</li>
                    <li id="1.1.7"><strong>1.1.7</strong> App&nbsp;Store Reviews:
                    <ul class="disc">
                        <li>App&nbsp;Store customer reviews can be an integral part of the app experience, so you should treat customers with respect when responding to their comments. Keep your responses targeted to the user’s comments and do not include personal information, spam, or marketing in your response. </li>
                        <li>Use the provided API to prompt users to review your app; this functionality allows customers to provide an App&nbsp;Store rating and review without the inconvenience of leaving your app, and we will disallow custom review prompts.</li>
                    </ul>
                    </li>
                </ul>
            </li>
        </div>
        <div class="page-section" id="">
            <li data-sidenav="1.2 User Generated Content" id="user-generated-content"><span id="1.2"></span><strong>1.2 User Generated Content</strong>
                <p>Apps with user-generated content present particular challenges, ranging from intellectual property infringement to anonymous bullying. To prevent abuse, apps with user-generated content or social networking services must include:</p>
                <ul class="disc margin-top-small">
                    <li>A method for filtering objectionable material from being posted to the app</li>
                    <li>A mechanism to report offensive content and timely responses to concerns</li>
                    <li>The ability to block abusive users from the service</li>
                    <li>Published contact information so users can easily reach you</li>
                </ul>
                <p>Apps with user-generated content or services that end up being used primarily for pornographic content, objectification of real people (e.g. “hot-or-not” voting), making physical threats, or bullying do not belong on the App&nbsp;Store and may be removed without notice. If your app includes user-generated content from a web-based service, it may display incidental mature “NSFW” content, provided that the content is hidden by default and only displayed when the user turns it on via your website.</p>
            </li>
        </div>
        <div class="page-section" id="">
            <li data-sidenav="1.3 Kids Category" id="kids-category"><span id="1.3"></span><strong>1.3 Kids Category</strong>
                <p>The Kids Category is a great way for people to easily find apps that are designed for children. If you want to participate in the Kids Category, you should focus on creating a great experience specifically for younger users. These apps must not include links out of the app, purchasing opportunities, or other distractions to kids unless reserved for a designated area behind a parental gate. Keep in mind that once customers expect your app to follow the Kids Category requirements, it will need to continue to meet these guidelines in subsequent updates, even if you decide to deselect the category. Learn more about <a href="#">parental gates</a>.</p>
                <p>You must comply with applicable privacy laws around the world relating to the collection of data from children online. Be sure to review the <a href="#">Privacy section</a> of these guidelines for more information. In addition, Kids Category apps may not send personally identifiable information or device information to third parties. Apps in the Kids Category should not include third-party analytics or third-party advertising. This provides a safer experience for kids. In limited cases, third-party analytics may be permitted provided that the services do not collect or transmit the IDFA or any identifiable information about children (such as name, date of birth, email address), their location, or their devices. This includes any device, network, or other information that could be used directly or combined with other information to identify users and their devices. Third-party contextual advertising may also be permitted in limited cases provided that the services have publicly documented practices and policies for Kids Category apps that include human review of ad creatives for age appropriateness.</p>
            </li>
        </div>
        <div class="page-section" id="">
            <li data-sidenav="1.4 Physical Harm" id="physical-harm"><span id="1.4"></span><strong>1.4 Physical Harm</strong>
                <p>If your app behaves in a way that risks physical harm, we may reject it. For example:</p>
                <ul class="no-bullet margin-top-small">
                    <li id="1.4.1"><strong>1.4.1</strong> Medical apps that could provide inaccurate data or information, or that could be used for diagnosing or treating patients may be reviewed with greater scrutiny.
                    <ul class="disc margin-top-small">
                        <li>Apps must clearly disclose data and methodology to support accuracy claims relating to health measurements, and if the level of accuracy or methodology cannot be validated, we will reject your app. For example, apps that claim to take x-rays, measure blood pressure, body temperature, blood glucose levels, or blood oxygen levels using only the sensors on the device are not permitted.</li>
                        <li>Apps should remind users to check with a doctor in addition to using the app and before making medical decisions.</li>
                    </ul>
                        If your medical app has received regulatory clearance, please submit a link to that documentation with your app.
                    </li>
                    <li id="1.4.2"><strong>1.4.2</strong> Drug dosage calculators must come from the drug manufacturer, a hospital, university, health insurance company, pharmacy or other approved entity, or receive approval by the FDA or one of its international counterparts. Given the potential harm to patients, we need to be sure that the app will be supported and updated over the long term.</li>
                    <li id="1.4.3"><strong>1.4.3</strong> Apps that encourage consumption of tobacco and vape products, illegal drugs, or excessive amounts of alcohol are not permitted on the <span class="nowrap">App&nbsp;Store.</span> Apps that encourage minors to consume any of these substances will be rejected. Facilitating the sale of marijuana, tobacco, or controlled substances (except for licensed pharmacies) isn’t allowed.</li>
                    <li id="1.4.4"><strong>1.4.4</strong> Apps may only display DUI checkpoints that are published by law enforcement agencies, and should never encourage drunk driving or other reckless behavior such as excessive speed.</li>
                    <li id="1.4.5"><strong>1.4.5</strong> Apps should not urge customers to participate in activities (like bets, challenges, etc.) or use their devices in a way that risks physical harm to themselves or others.</li>
                </ul>
            </li>
        </div>
        <div class="page-section" id="">
            <li data-sidenav="1.5 Developer Information" id="developer-information"><span id="1.5"></span><strong>1.5 Developer Information</strong>
                <p>People need to know how to reach you with questions and support issues. Make sure your app and its Support URL include an easy way to contact you; this is particularly important for apps that may be used in the classroom. Failure to include accurate and up-to-date contact information not only frustrates customers, but may violate the law in some countries. Also ensure that Wallet passes include valid contact information from the issuer and are signed with a dedicated certificate assigned to the brand or trademark owner of the pass.</p>
            </li>
        </div>
        <div class="page-section" id="">
            <li data-sidenav="1.6 Data Security" id="data-security"><span id="1.6"></span><strong>1.6 Data Security</strong>
                <p>Apps should implement appropriate security measures to ensure proper handling of user information collected pursuant to the <span class="nowrap">Apple Developer</span> Program License Agreement and these Guidelines (see Guideline 5.1 for more information) and prevent its unauthorized use, disclosure, or access by third parties.</p>
            </li>
        </div>
      </ul>
       
        <div class="page-section" id="">
            <h3 data-sidenav="" id="performance"><span id="2"></span>2. Performance</h3>
                <ul class="no-bullet">

        <div class="page-section" id="">
            <li data-sidenav="2.1 App Completeness" id="app-completeness"><span id="2.1"></span><strong>2.1 App Completeness</strong>
                <p>Submissions to App Review, including apps you make available for pre-order, should be final versions with all necessary metadata and fully functional URLs included; placeholder text, empty websites, and other temporary content should be scrubbed before submission. Make sure your app has been tested on-device for bugs and stability before you submit it, and include demo account info (and turn on your back-end service!) if your app includes a login. If you offer in-app purchases in your app, make sure they are complete, up-to-date, and visible to the reviewer, or that you explain why not in your review notes. Please don’t treat App Review as a software testing service. We will reject incomplete app bundles and binaries that crash or exhibit obvious technical problems.</p></li>
        </div>
        <div class="page-section" id="">
            <li data-sidenav="2.2 Beta Testing" id="beta-testing"><span id="2.2"></span><strong>2.2 Beta Testing</strong>
                <p>Demos, betas, and trial versions of your app don’t belong on the App&nbsp;Store – use TestFlight instead. Any app submitted for beta distribution via TestFlight should be intended for public distribution and should comply with the App Review Guidelines. Note, however, that apps using TestFlight cannot be distributed to testers in exchange for compensation of any kind, including as a reward for crowd-sourced funding. Significant updates to your beta build should be submitted to TestFlight App Review before being distributed to your testers. To learn more, visit the <a href="#">TestFlight Beta Testing</a>.</p></li>
        </div>
        <div class="page-section" id="">
            <li data-sidenav="2.3 Accurate Metadata" id="accurate-metadata"><span id="2.3"></span><strong>2.3 Accurate Metadata</strong>
                <p>Customers should know what they’re getting when they download or buy your app, so make sure your app description, screenshots, and previews accurately reflect the app’s core experience and remember to keep them up-to-date with new versions.</p>
                <ul class="no-bullet margin-top-small">
                    <li id="2.3.1"><strong>2.3.1</strong> Don’t include any hidden or undocumented features in your app; your app’s functionality should be clear to end-users and App Review. Similarly, you should not market your app on the App&nbsp;Store or offline as including content or services that it does not actually offer (e.g. iOS-based virus and malware scanners). Egregious or repeated behavior is grounds for removal from the Developer Program. We work hard to make the App&nbsp;Store a trustworthy ecosystem and expect our app developers to follow suit; if you’re dishonest, we don’t want to do business with you.</li>
                    <li id="2.3.2"><strong>2.3.2</strong> If your app includes in-app purchases, make sure your app description, screenshots, and previews clearly indicate whether any featured items, levels, subscriptions, etc. require additional purchases. If you decide to promote in-app purchases on the <span class="nowrap">App&nbsp;Store,</span> ensure that the in-app purchase Display Name, Screenshot and Description are appropriate for a public audience, that you follow the guidance found in <a href="#">Promoting Your In-App Purchases</a>, and that your app properly handles the <a href="#">SKPaymentTransactionObserver method</a> so that customers can seamlessly complete the purchase when your app launches.</li>
                    <li id="2.3.3"><strong>2.3.3</strong> Screenshots should show the app in use, and not merely the title art, log-in page, or splash screen. They may also include text and image overlays (e.g. to demonstrate input mechanisms, such as an animated touch point or Apple Pencil) and show extended functionality on device, such as Touch Bar.</li>
                    <li id="2.3.4"><strong>2.3.4</strong> Previews are a great way for customers to see what your app looks like and what it does. To ensure people understand what they’ll be getting with your app, previews may only use video screen captures of the app itself. Stickers and iMessage extensions may show the user experience in the Messages app. You can add narration and video or textual overlays to help explain anything that isn’t clear from the video alone.</li>
                    <li id="2.3.5"><strong>2.3.5</strong> Select the most appropriate category for your app, and check out the <a href="#">App&nbsp;Store Category Definitions</a> if you need help. If you’re way off base, we may change the category for you.</li>
                    <li id="2.3.6"><strong>2.3.6</strong> Answer the age rating questions in <span class="nowrap">App&nbsp;Store Connect</span> honestly so that your app aligns properly with parental controls. If your app is mis-rated, customers might be surprised by what they get, or it could trigger an inquiry from government regulators. If your app includes media that requires the display of content ratings or warnings (e.g. films, music, games, etc.), you are responsible for complying with local requirements in each territory where your app is available.</li>
                    <li id="2.3.7"><strong>2.3.7</strong> Choose a unique app name, assign keywords that accurately describe your app, and don’t try to pack any of your metadata with trademarked terms, popular app names, or other irrelevant phrases just to game the system. App names must be limited to 30 characters and should not include prices, terms, or descriptions that are not the name of the app. App subtitles are a great way to provide additional context for your app; they must follow our standard metadata rules and should not include inappropriate content, reference other apps, or make unverifiable product claims. Apple may modify inappropriate keywords at any time or take other appropriate steps to prevent abuse.</li>
                    <li id="2.3.8"><strong>2.3.8</strong> Metadata should be appropriate for all audiences, so make sure your app and in-app purchase icons, screenshots, and previews adhere to a 4+ age rating even if your app is rated higher. For example, if your app is a game that includes violence, select images that don’t depict a gruesome death or a gun pointed at a specific character. Use of terms like “For Kids” and “For Children” in app metadata is reserved for the Kids Category. Remember to ensure your metadata, including app name and icons (small, large, Apple Watch app, alternate icons, etc.), are similar to avoid creating confusion.</li>
                    <li id="2.3.9"><strong>2.3.9</strong> You are responsible for securing the rights to use all materials in your app icons, screenshots, and previews, and you should display fictional account information instead of data from a real person.</li>
                    <li id="2.3.10"><strong>2.3.10</strong> Make sure your app is focused on the iOS, Mac, <span class="nowrap">Apple TV</span> or <span class="nowrap">Apple Watch</span> experience, and don’t include names, icons, or imagery of other mobile platforms in your app or metadata, unless there is specific, approved interactive functionality. Make sure your app metadata is focused on the app itself and its experience. Don’t include irrelevant information, including but not limited to information about Apple or the development process.</li>
                    <li id="2.3.11"><strong>2.3.11</strong> Apps you submit for pre-order on the App&nbsp;Store must be complete and deliverable as submitted. Ensure that the app you ultimately release is not materially different from what you advertise while the app is in a pre-order state. If you make material changes to the app (e.g. change business models), you should restart your pre-order sales.</li>
                    <li id="2.3.12"><strong>2.3.12</strong> Apps must clearly describe new features and product changes in their “What’s New” text. Simple bug fixes, security updates, and performance improvements may rely on a generic description, but more significant changes must be listed in the notes.</li>
                </ul>
            </li>
        </div>
        <div class="page-section" id="">
            <li data-sidenav="2.4 Hardware Compatibility" id="hardware-compatibility"><span id="2.4"></span><strong>2.4 Hardware Compatibility</strong>
                <ul class="no-bullet margin-top-small">
                    <li id="2.4.1"><strong>2.4.1</strong> To ensure people get the most out of your app, iPhone apps should run on iPad whenever possible. We encourage you to consider building universal apps so customers can use them on all of their devices. Learn more about <a href="#">Universal apps</a>.</li>
                    <li id="2.4.2"><strong>2.4.2</strong> Design your app to use power efficiently and be used in a way that does not risk damage to the device. Apps should not rapidly drain battery, generate excessive heat, or put unnecessary strain on device resources. For example, apps should not encourage placing the device under a mattress or pillow while charging or perform excessive write cycles to the solid state drive. Apps, including any third-party advertisements displayed within them, may not run unrelated background processes, such as cryptocurrency mining.</li>
                    <li id="2.4.3"><strong>2.4.3</strong> People should be able to use your Apple TV app without the need for hardware inputs beyond the Siri remote or third-party game controllers, but feel free to provide enhanced functionality when other peripherals are connected. If you require a game controller, make sure you clearly explain that in your metadata so customers know they need additional equipment to play.</li>
                    <li id="2.4.4"><strong>2.4.4</strong> Apps should never suggest or require a restart of the device or modifications to system settings unrelated to the core functionality of the application. For example, don’t encourage users to turn off Wi-Fi, disable security features, etc.</li>
                    <li id="2.4.5"><strong>2.4.5</strong> Apps distributed via the <span class="nowrap">Mac App&nbsp;Store</span> have some additional requirements to keep in mind:
                        <ul class="no-bullet margin-top-small">
                            <li><strong>(i)</strong> They must be appropriately sandboxed, and follow <a href="#">macOS File System Documentation</a>. They should also only use the appropriate macOS APIs for modifying user data stored by other Apps (e.g. bookmarks, Address Book, or Calendar entries).</li>
                            <li><strong>(ii)</strong> They must be packaged and submitted using technologies provided in Xcode; no third-party installers allowed. They must also be self-contained, single application installation bundles and cannot install code or resources in shared locations.</li>
                            <li><strong>(iii)</strong> They may not auto-launch or have other code run automatically at startup or login without consent nor spawn processes that continue to run without consent after a user has quit the app. They should not automatically add their icons to the Dock or leave short cuts on the user desktop.</li>
                            <li><strong>(iv)</strong> They may not download or install standalone apps, kexts, additional code, or resources to add functionality or significantly change the app from what we see during the review process.</li>
                            <li><strong>(v)</strong> They may not request escalation to root privileges or use setuid attributes.</li>
                            <li><strong>(vi)</strong> They may not present a license screen at launch, require license keys, or implement their own copy protection.</li>
                            <li><strong>(vii)</strong> They must use the Mac App&nbsp;Store to distribute updates; other update mechanisms are not allowed.</li>
                            <li><strong>(viii)</strong> Apps should run on the currently shipping OS and may not use deprecated or optionally installed technologies (e.g. Java, Rosetta)</li>
                            <li><strong>(ix)</strong> Apps must contain all language and localization support in a single app bundle.</li>
                        </ul>
                    </li>
                </ul>
            </li>
        </div>
                    <div class="page-section" id="">
                        <li data-sidenav="2.5 Software Requirements" id="software-requirements"><span id="2.5"></span><strong>2.5 Software Requirements</strong>
                            <ul class="no-bullet margin-top-small">
                                <li id="2.5.1"><strong>2.5.1</strong> Apps may only use public APIs and must run on the currently shipping OS. Learn more about <a href="#">public APIs</a>. Keep your apps up-to-date and make sure you phase out any deprecated features, frameworks or technologies that will no longer be supported in future versions of an OS. Apps should use APIs and frameworks for their intended purposes and indicate that integration in their app description. For example, the HomeKit framework should provide home automation services; and HealthKit should be used for health and fitness purposes and integrate with the Health app.</li>
                                <li id="2.5.2"><strong>2.5.2</strong> Apps should be self-contained in their bundles, and may not read or write data outside the designated container area, nor may they download, install, or execute code which introduces or changes features or functionality of the app, including other apps. Educational apps designed to teach, develop, or allow students to test executable code may, in limited circumstances, download code provided that such code is not used for other purposes. Such apps must make the source code provided by the Application completely viewable and editable by the user.</li>
                                <li id="2.5.3"><strong>2.5.3</strong> Apps that transmit viruses, files, computer code, or programs that may harm or disrupt the normal operation of the operating system and/or hardware features, including Push Notifications and Game Center, will be rejected. Egregious violations and repeat behavior will result in removal from the Developer Program.</li>
                                <li id="2.5.4"><strong>2.5.4</strong> Multitasking apps may only use background services for their intended purposes: VoIP, audio playback, location, task completion, local notifications, etc. If your app uses location background mode, include a reminder that doing so may dramatically decrease battery life.</li>
                                <li id="2.5.5"><strong>2.5.5</strong> Apps must be fully functional on IPv6-only networks.</li>
                                <li id="2.5.6"><strong>2.5.6</strong> Apps that browse the web must use the appropriate WebKit framework and WebKit Javascript.</li>
                                <li id="2.5.7"><strong>2.5.7</strong> Video streaming content over a cellular network longer than 10 minutes must use HTTP Live Streaming and include a baseline 192 kbps HTTP Live stream.</li>
                                <li id="2.5.8"><strong>2.5.8</strong> Apps that create alternate desktop/home screen environments or simulate multi-app widget experiences will be rejected.</li>
                                <li id="2.5.9"><strong>2.5.9</strong> Apps that alter or disable the functions of standard switches, such as the Volume Up/Down and Ring/Silent switches, or other native user interface elements or behaviors will be rejected. For example, apps should not block links out to other apps or other features that users would expect to work a certain way. Learn more about proper handling of <a href="#">links</a>. </li>
                                <li id="2.5.10"><strong>2.5.10</strong> Apps should not be submitted with empty ad banners or test advertisements.</li>
                                <li id="2.5.11"><strong>2.5.11</strong> SiriKit and Shortcuts
                                    <ul class="no-bullet margin-top-small">
                                        <li><strong>(i)</strong> Apps integrating SiriKit and Shortcuts should only sign up for intents they can handle without the support of an additional app and that users would expect from the stated functionality. For example, if your app is a meal planning app, you should not incorporate an intent to start a workout, even if the app shares integration with a fitness app.</li>
                                        <li><strong>(ii)</strong> Ensure that the vocabulary and phrases in your plist pertains to your app and the Siri functionality of the intents the app has registered for. Aliases must relate directly to your app or company name and should not be generic terms or include third-party app names or services.</li>
                                        <li><strong>(iii)</strong> Resolve the Siri request or Shortcut in the most direct way possible and do not insert ads or other marketing between the request and its fulfillment. Only request a disambiguation when required to complete the task (e.g. asking the user to specify a particular type of workout).</li>
                                    </ul>
                                </li>
                                <li id="2.5.12"><strong>2.5.12</strong> Apps using CallKit or including an SMS Fraud Extension should only block phone numbers that are confirmed spam. Apps that include call-, SMS-, and MMS- blocking functionality or spam identification must clearly identify these features in their marketing text and explain the criteria for their blocked and spam lists. You may not use the data accessed via these tools for any purpose not directly related to operating or improving your app or extension (e.g. you may not use, share, or sell it for tracking purposes, creating user profiles, etc.).</li>
                                <li id="2.5.13"><strong>2.5.13</strong> Apps using facial recognition for account authentication must use <a href="#">LocalAuthentication</a> (and not ARKit or other facial recognition technology) where possible, and must use an alternate authentication method for users under 13 years old.</li>
                                <li id="2.5.14"><strong>2.5.14</strong> Apps must request explicit user consent and provide a clear visual and/or audible indication when recording, logging, or otherwise making a record of user activity. This includes any use of the device camera, microphone, screen recordings, or other user inputs.</li>
                                <li id="2.5.15"><strong>2.5.15</strong> Apps that enable users to view and select files should include items from the Files app and the user’s iCloud documents.</li>
                            </ul>
                        </li>
                    </ul>
                </div>
            <div class="page-section" id="">
             <h3 data-sidenav="" id="business"><span id="3"></span>3. Business</h3>
                    <p class="section-intro">There are many ways to monetize your app on the <span class="nowrap">App&nbsp;Store.</span> If your business model isn’t obvious, make sure to explain in its metadata and App Review notes. If we can’t understand how your app works or your in-app purchases aren’t immediately obvious, it will delay your review and may trigger a rejection. And while pricing is up to you, we won’t distribute apps and in-app purchase items that are clear rip-offs. We’ll reject expensive apps that try to cheat users with irrationally high prices.</p>
                    <p class="section-intro margin-bottom-small">If we find that you have attempted to manipulate reviews, inflate your chart rankings with paid, incentivized, filtered, or fake feedback, or engage with third-party services to do so on your behalf, we will take steps to preserve the integrity of the <span class="nowrap">App&nbsp;Store,</span> which may include expelling you from the Developer Program.</p>
                     </div>
                <div class="page-section" id="">
                    <ul class="no-bullet">
                        <li data-sidenav="3.1 Payments" id="payments"><span id="3.1 "></span><strong>3.1 Payments</strong>
                             </div>
                        <div class="page-section" id="">
                            <ul class="no-bullet margin-top-small">
                                <li data-sidenav="3.1.1 In-App Purchase" id="in-app-purchase"><span id="3.1.1"></span><strong>3.1.1 In-App Purchase:</strong>
                                    <ul class="disc no-margin-top">
                                        <li>If you want to unlock features or functionality within your app, (by way of example: subscriptions, in-game currencies, game levels, access to premium content, or unlocking a full version), you must use in-app purchase. Apps may not use their own mechanisms to unlock content or functionality, such as license keys, augmented reality markers, QR codes, etc. Apps and their metadata may not include buttons, external links, or other calls to action that direct customers to purchasing mechanisms other than in-app purchase.</li>
                                        <li>Apps may use in-app purchase currencies to enable customers to “tip” digital content providers in the app.</li>
                                        <li>Any credits or in-game currencies purchased via in-app purchase may not expire, and you should make sure you have a restore mechanism for any restorable in-app purchases.</li>
                                        <li>Remember to assign the correct purchasability type or your app will be rejected.</li>
                                        <li>Apps may enable gifting of items that are eligible for in-app purchase to others. Such gifts may only be refunded to the original purchaser and may not be exchanged.</li>
                                        <li>Apps distributed via the <span class="nowrap">Mac App&nbsp;Store</span> may host plug-ins or extensions that are enabled with mechanisms other than the <span class="nowrap">App&nbsp;Store.</span></li>
                                        <li>Apps offering “loot boxes” or other mechanisms that provide randomized virtual items for purchase must disclose the odds of receiving each type of item to customers prior to purchase.</li>
                                        <li>Non-subscription apps may offer a free time-based trial period before presenting a full unlock option by setting up a Non-Consumable IAP item at Price Tier 0 that follows the naming convention: “XX-day Trial.” Prior to the start of the trial, your app must clearly identify its duration, the content or services that will no longer be accessible when the trial ends, and any downstream charges the user would need to pay for full functionality. Learn more about managing content access and the duration of the trial period using <a href="#">Device Check</a>.</li>
                                    </ul>
                                </li>
                                </div>
                            <div class="page-section" id="">
                                <li data-sidenav="3.1.2 Subscriptions" id="subscriptions"><span id="3.1.2"></span><strong>3.1.2 Subscriptions:</strong> Apps may offer auto-renewing in-app purchase subscriptions, regardless of category on the <span class="nowrap">App&nbsp;Store.</span> When incorporating auto-renewable subscriptions into your app, be sure to follow the guidelines below.</li>
                                <li id="permissible-uses"><span id="3.1.2a"></span><strong>3.1.2(a) Permissible uses:</strong> If you offer an auto-renewing subscription, you must provide ongoing value to the customer, and the subscription period must last at least seven days and be available across all of the user’s devices. While the following list is not exhaustive, examples of appropriate subscriptions include: new game levels; episodic content; multi-player support; apps that offer consistent, substantive updates; access to large collections of, or continually updated, media content; software as a service (“SAAS”); and cloud support. In addition:
                                    <ul class="disc margin-top-small">
                                        <li>Subscriptions may be offered alongside a la carte offerings (e.g. you may offer a subscription to an entire library of films as well the purchase or rental of a single movie).</li>
                                        <li>You may offer a single subscription that is shared across your own apps and services, but these subscriptions may not extend to third-party apps or services. Games offered in a game subscription must be owned or exclusively licensed by the developer (e.g. not part of a game publishing platform). Each game must be downloaded directly from the <span class="nowrap">App&nbsp;Store,</span> must be designed to avoid duplicate payment by a subscriber, and should not disadvantage non-subscriber customers.</li><li> Subscriptions must work on all of the user’s devices where the app is available. Learn more about <a href="#">sharing a subscription across your apps</a>. </li>
                                        <li>Apps must not force users to rate the app, review the app, download other apps, or other similar actions in order to access functionality, content, or use of the app.</li>
                                        <li>As with all apps, those offering subscriptions should allow a user to get what they’ve paid for without performing additional tasks, such as posting on social media, uploading contacts, checking in to the app a certain number of times, etc. </li>
                                        <li>Subscriptions may include consumable credits, gems, in-game currencies, etc., and you may offer subscriptions that include access to discounted consumable goods (e.g. a platinum membership that exposes gem-packs for a reduced price).</li>
                                        <li>If you are changing your existing app to a subscription-based business model, you should not take away the primary functionality existing users have already paid for. For example, let customers who have already purchased a “full game unlock” continue to access the full game after you introduce a subscription model for new customers.</li>
                                        <li>Auto-renewing subscription apps may offer a free trial period to customers by providing the relevant information set forth in <span class="nowrap">App&nbsp;Store Connect.</span></li>
                                        <li>Apps that attempt to scam users will be removed from the <span class="nowrap">App&nbsp;Store.</span> This includes apps that attempt to trick users into purchasing a subscription under false pretenses or engage in bait-and-switch and scam practices will be removed from the App&nbsp;Store and you may be removed from the <span class="nowrap">Apple Developer</span> Program. Learn more about <a href="#/">Subscription Free Trials</a>.</li>
                                    </ul>
                                </li>
                                <li id="upgrades-and-downgrades"><span id="3.1.2b"></span><strong>3.1.2(b) Upgrades and Downgrades:</strong> Users should have a seamless upgrade/downgrade experience and should not be able to inadvertently subscribe to multiple variations of the same thing. Review <a href="#">best practices</a> on managing your subscription upgrade and downgrade options.</li>
                                <li><span id="3.1.2c"></span><strong>3.1.2(c) Subscription Information:</strong> Before asking a customer to subscribe, you should clearly describe what the user will get for the price. How many issues per month? How much cloud storage? What kind of access to your service? Ensure you clearly communicate the requirements described in Schedule 2 of the <span class="nowrap">Apple Developer</span> Program License Agreement, found in <a href="#">Agreements, Tax, and Banking</a>.</li>
                                </div>
                            <div class="page-section" id="">
                                <li data-sidenav="3.1.3(a) “Reader” Apps" id="reader-apps"><span id="3.1.3a"></span><strong>3.1.3(a) “Reader” Apps:</strong> Apps may allow a user to access previously purchased content or content subscriptions (specifically: magazines, newspapers, books, audio, music, video, access to professional databases, VoIP, cloud storage, and approved services such as classroom management apps), provided that you agree not to directly or indirectly target iOS users to use a purchasing method other than in-app purchase, and your general communications about other purchasing methods are not designed to discourage use of in-app purchase.</li>
                                 </div>
                            <div class="page-section" id="">
                                <li data-sidenav="3.1.3(b) Multiplatform Services" id="multiplatform-services"><span id="3.1.3b"></span><strong>3.1.3(b) Multiplatform Services:</strong> Apps that operate across multiple platforms may allow users to access content, subscriptions, or features they have acquired elsewhere, including consumable items in multi-platform games, provided those items are also available as in-app purchases within the app. You must not directly or indirectly target iOS users to use a purchasing method other than in-app purchase, and your general communications about other purchasing methods must not discourage use of in-app purchase.</li>
                                 </div>
                            <div class="page-section" id="">
                                <li data-sidenav="3.1.4 Hardware-Specific Content" id="hardware-specific-content"><span id="3.1.4"></span><strong>3.1.4 Hardware-Specific Content:</strong> In limited circumstances, such as when features are dependent upon specific hardware to function, the app may unlock that functionality without using in-app purchase (e.g. an astronomy app that adds features when synced with a telescope). App features that work in combination with an approved physical product (such as a toy) on an <em>optional</em> basis may unlock functionality without using in-app purchase, provided that an in-app purchase option is available as well. You may not, however, require users to purchase unrelated products or engage in advertising or marketing activities to unlock app functionality.</li>
                            </div>
                            <div class="page-section" id="">
                                <li data-sidenav="3.1.5(a) Goods and Services Outside of the App" id="goods-and-services"><span id="3.1.5a"></span><strong>3.1.5(a) Goods and Services Outside of the App:</strong> If your app enables people to purchase goods or services that will be consumed outside of the app, you must use purchase methods other than in-app purchase to collect those payments, such as Apple Pay or traditional credit card entry.</li>
                                 </div>
                            <div class="page-section" id="">
                                <li data-sidenav="3.1.5(b) Cryptocurrencies" id="cryptocurrencies"><span id="3.1.5b"></span><strong>3.1.5(b) Cryptocurrencies:</strong>
                                    <ul class="disc margin-top-small">
                                        <li>(i) Wallets: Apps may facilitate virtual currency storage, provided they are offered by developers enrolled as an organization.</li>
                                        <li>(ii) Mining: Apps may not mine for cryptocurrencies unless the processing is performed off device (e.g. cloud-based mining).</li>
                                        <li>(iii) Exchanges: Apps may facilitate transactions or transmissions of cryptocurrency on an approved exchange, provided they are offered by the exchange itself.</li>
                                        <li>(iv) Initial Coin Offerings: Apps facilitating Initial Coin Offerings (“ICOs”), cryptocurrency futures trading, and other crypto-securities or quasi-securities trading must come from established banks, securities firms, futures commission merchants (“FCM”), or other approved financial institutions and must comply with all applicable law.</li>
                                        <li>(v) Cryptocurrency apps may not offer currency for completing tasks, such as downloading other apps, encouraging other users to download, posting to social networks, etc.</li>
                                    </ul>
                                </li>
                                 </div>
                            <div class="page-section" id="">
                                <li data-sidenav="3.1.6 Apple Pay" id="apple-pay"><span id="3.1.6"></span><strong>3.1.6 Apple Pay:</strong> Apps using Apple Pay must provide all material purchase information to the user prior to sale of any good or service and must use Apple Pay branding and user interface elements correctly, as described in the <a href="#">Apple Pay Identity Guidelines</a> and <a href="#">Human Interface Guidelines</a>. Apps using Apple Pay to offer recurring payments must, at a minimum, disclose the following information:
                                    <ul class="disc margin-top-small">
                                        <li>The length of the renewal term and the fact that it will continue until canceled</li>
                                        <li>What will be provided during each period</li>
                                        <li>The actual charges that will be billed to the customer</li>
                                        <li>How to cancel</li>
                                    </ul>
                                </li>
                                 </div>
                            <div class="page-section" id="">
                                <li data-sidenav="3.1.7 Advertising" id="advertising"><span id="3.1.7"></span><strong>3.1.7 Advertising:</strong> Ads displayed in an app must be appropriate for the app’s age rating, allow the user to see all information used to target them for that ad (without requiring the user to leave the app), and may not engage in targeted or behavioral advertising based on sensitive user data such as health/medical data (e.g. from the HealthKit APIs), school and classroom data (e.g. from ClassKit), or from kids (e.g. from apps in the Kids Category), etc. Interstitial ads or ads that interrupt or block the user experience must clearly indicate that they are an ad, must not manipulate or trick users into tapping into them, and must provide easily accessible and visible close/skip buttons large enough for people to easily dismiss the ad.</li>
                            </ul>
                        </li>
                        </div>
                    <div class="page-section" id="">
                        <li data-sidenav="3.2 Other Business Model Issues" id="other-business-model-issues"><span id="3.2"></span><strong>3.2 Other Business Model Issues</strong>
                            <p>The lists below are not exhaustive, and your submission may trigger a change or update to our policies, but here are some additional do’s and don’ts to keep in mind:</p>
                             </div>
                        <div class="page-section" id="">
                            <ul class="no-bullet margin-top-small">
                                <li data-sidenav="3.2.1 Acceptable" id="acceptable"><span id="3.2.1"></span><strong>3.2.1 Acceptable</strong>
                                    <ul class="no-bullet margin-top-small">
                                        <li><strong>(i)</strong> Displaying your own apps for purchase or promotion within your app, provided the app is not merely a catalog of your apps.</li>
                                        <li><strong>(ii)</strong> Displaying or recommending a collection of third-party apps that are designed for a specific approved need (e.g. health management, aviation, accessibility). Your app should provide robust editorial content so that it doesn’t seem like a mere storefront.</li>
                                        <li><strong>(iii)</strong> Disabling access to specific approved rental content (e.g. films, television programs, music, books) after the rental period has expired; all other items and services may not expire.</li>
                                        <li><strong>(iv)</strong> Wallet passes can be used to make or receive payments, transmit offers, or offer identification (such as movie tickets, coupons, and VIP credentials). Other uses may result in the rejection of the app and the revocation of Wallet credentials.</li>
                                        <li><strong>(v)</strong> Insurance apps must be free, in legal-compliance in the regions distributed, and cannot use in-app purchase.</li>
                                        <li><strong>(vi)</strong> Approved nonprofits may fundraise directly within their own apps or third-party apps, provided those fundraising campaigns adhere to all App Review Guidelines and offer Apple Pay support. These apps must disclose how the funds will be used, abide by all required local and federal laws, and ensure appropriate tax receipts are available to donors. Additional information shall be provided to App Review upon request. Nonprofit platforms that connect donors to other nonprofits must ensure that every nonprofit listed in the app has also gone through the nonprofit approval process. Learn more about becoming an <a href="#">approved nonprofit</a>.</li>
                                        <li><strong>(vii)</strong> Apps may enable individual users to give a monetary gift to another individual without using in-app purchase, provided that (a) the gift is a completely optional choice by the giver, and (b) 100% of the funds go to the receiver of the gift. However, a gift that is connected to or associated at any point in time with receiving digital content or services must use in-app purchase.</li>
                                        <li><strong>(viii)</strong> Apps used for financial trading, investing, or money management should come from the financial institution performing such services or must use a public API offered by the institution in compliance with its Terms &amp; Conditions.</li>
                                    </ul>
                                </li>
                            </div>
                        <div class="page-section" id="">
                                <li data-sidenav="3.2.2 Unacceptable" id="unacceptable"><span id="3.2.2"></span><strong>3.2.2 Unacceptable</strong>
                                    <ul class="no-bullet margin-top-small">
                                        <li><strong>(i)</strong> Creating an interface for displaying third-party apps, extensions, or plug-ins similar to the App&nbsp;Store or as a general-interest collection.</li>
                                        <li><strong>(ii)</strong> Monetizing built-in capabilities provided by the hardware or operating system, such as Push Notifications, the camera, or the gyroscope; or Apple services, such as Apple Music access or iCloud storage.</li>
                                        <li><strong>(iii)</strong> Artificially increasing the number of impressions or click-throughs of ads, as well as apps that are designed predominantly for the display of ads.</li>
                                        <li><strong>(iv)</strong> Unless you are an approved nonprofit or otherwise permitted under Section 3.2.1 (vi) above, collecting funds within the app for charities and fundraisers. Apps that seek to raise money for such causes must be free on the App&nbsp;Store and may only collect funds outside of the app, such as via Safari or SMS.</li>
                                        <li><strong>(v)</strong> Arbitrarily restricting who may use the app, such as by location or carrier.</li>
                                        <li><strong>(vi)</strong> Apps should allow a user to get what they’ve paid for without performing additional tasks, such as posting on social media, uploading contacts, checking in to the app a certain number of times, etc. Apps should not require users to rate the app, review the app, watch videos, download other apps, tap on advertisements, or take other similar actions in order to access functionality, content, use the app, or receive monetary or other compensation, including but not limited to gift cards and codes.</li>
                                        <li><strong>(vii)</strong> Artificially manipulating a user’s visibility, status, or rank on other services unless permitted by that service’s Terms and Conditions.</li>
                                        <li><strong>(viii)</strong> Apps that facilitate binary options trading are not permitted on the <span class="nowrap">App&nbsp;Store.</span> Consider a web app instead. Apps that facilitate trading in contracts for difference (“CFDs”) or other derivatives (e.g. FOREX) must be properly licensed in all jurisdictions where the service is available.</li>
                                        <li><strong>(ix)</strong> Apps must not force users to rate the app, review the app, download other apps, or perform other similar actions in order to access functionality, content, or use of the app.</li>
                                    </ul>
                                </li>

                            </ul>
                        </li>
                    </ul>
         </div>
        <div class="page-section" id="">
            <h3 data-sidenav="" id="design"><span id="4"></span>4. Design</h3>
                    <p class="section-intro">Apple customers place a high value on products that are simple, refined, innovative, and easy to use, and that’s what we want to see on the <span class="nowrap">App&nbsp;Store.</span> Coming up with a great design is up to you, but the following are minimum standards for approval to the <span class="nowrap">App&nbsp;Store.</span> And remember that even after your app has been approved, you should update your app to ensure it remains functional and engaging to new and existing customers. Apps that stop working or offer a degraded experience may be removed from the App&nbsp;Store at any time.</p>
                     </div>
                <div class="page-section" id="">
                    <ul class="no-bullet">
                        <li data-sidenav="4.1 Copycats" id="copycats"><span id="4.1"></span><strong>4.1 Copycats</strong><p>Come up with your own ideas. We know you have them, so make yours come to life. Don’t simply copy the latest popular app on the <span class="nowrap">App&nbsp;Store,</span> or make some minor changes to another app’s name or UI and pass it off as your own. In addition to risking an intellectual property infringement claim, it makes the App&nbsp;Store harder to navigate and just isn’t fair to your fellow developers.</p></li>
                         </div>
                    <div class="page-section" id="">
                        <li data-sidenav="4.2 Minimum Functionality" id="minimum-functionality"><span id="4.2"></span><strong>4.2 Minimum Functionality</strong>
                            <p>Your app should include features, content, and UI that elevate it beyond a repackaged website. If your app is not particularly useful, unique, or “app-like,” it doesn’t belong on the <span class="nowrap">App&nbsp;Store.</span> If your App doesn’t provide some sort of lasting entertainment value, it may not be accepted. Apps that are simply a song or movie should be submitted to the iTunes Store. Apps that are simply a book or game guide should be submitted to the Apple Books Store.</p>
                            <ul class="no-bullet margin-top-small">
                                <li id="4.2.1"><strong>4.2.1</strong> Apps using ARKit should provide rich and integrated augmented reality experiences; merely dropping a model into an AR view or replaying animation is not enough.</li>
                                <li id="4.2.2"><strong>4.2.2</strong> Other than catalogs, apps shouldn’t primarily be marketing materials, advertisements, web clippings, content aggregators, or a collection of links.</li>
                                <li id="4.2.3"><strong>4.2.3</strong>
                                    <ul class="disc margin-top-small">
                                        <li>(i) Your app should work on its own without requiring installation of another app to function.</li>
                                        <li>(ii) Make sure you include sufficient content in the binary for the app to function at launch.</li>
                                        <li>(iii) If your app needs to download additional resources, disclose the size of the download and prompt users before doing so. Existing apps must comply with this guideline in any update submitted after January 1, 2019.</li>
                                    </ul>
                                </li>
                                <li id="4.2.4"><strong>4.2.4</strong> Apple Watch apps that appear to be a watch face are confusing, because people will expect them to work with device features such as swipes, notifications, and third-party complications. Creative ways of expressing time as an app interface is great (say, a tide clock for surfers), but if your app comes too close to resembling a watch face, we will reject it.</li>
                                <li id="4.2.5"><strong>4.2.5</strong> Apps that are primarily iCloud and iCloud Drive file managers need to include additional app functionality to be approved.</li>
                                <li id="4.2.6"><strong>4.2.6</strong> Apps created from a commercialized template or app generation service will be rejected unless they are submitted directly by the provider of the app’s content. These services should not submit apps on behalf of their clients and should offer tools that let their clients create customized, innovative apps that provide unique customer experiences. Another acceptable option for template providers is to create a single binary to host all client content in an aggregated or “picker” model, for example as a restaurant finder app with separate customized entries or pages for each client restaurant, or as an event app with separate entries for each client event.</li>
                                <li id="4.2.7"><strong>4.2.7 Remote Desktop Clients:</strong> If your remote desktop app acts as a mirror of specific software or services rather than a generic mirror of the host device, it must comply with the following:
                                    <ul class="disc margin-top-small">
                                        <li>(a) The app must only connect to a user-owned host device that is a personal computer or dedicated game console owned by the user, and both the host device and client must be connected on a local and LAN-based network.</li>
                                        <li>(b) Any software or services appearing in the client are fully executed on the host device, rendered on the screen of the host device, and may not use APIs or platform features beyond what is required to stream the Remote Desktop.</li>
                                        <li>(c) All account creation and management must be initiated from the host device.</li>
                                        <li>(d) The UI appearing on the client does not resemble an iOS or App&nbsp;Store view, does not provide a store-like interface, or include the ability to browse, select, or purchase software not already owned or licensed by the user. For the sake of clarity, transactions taking place within mirrored software do not need to use in-app purchase, provided the transactions are processed on the host device.</li>
                                        <li>(e) Thin clients for cloud-based apps are not appropriate for the <span class="nowrap">App&nbsp;Store.</span></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                         </div>
                    <div class="page-section" id="">
                        <li data-sidenav="4.3 Spam" id="spam"><span id="4.3"></span><strong>4.3 Spam</strong><p>Don’t create multiple Bundle IDs of the same app. If your app has different versions for specific locations, sports teams, universities, etc., consider submitting a single app and provide the variations using in-app purchase. Also avoid piling on to a category that is already saturated; the App&nbsp;Store has enough fart, burp, flashlight, and Kama Sutra apps, etc. already. Spamming the store may lead to your removal from the Developer Program.</p></li>
                         </div>
                    <div class="page-section" id="">
                        <li data-sidenav="4.4 Extensions" id="extensions"><span id="4.4"></span><strong>4.4 Extensions</strong>
                            <p>Apps hosting or containing extensions must comply with the <a href="#">App Extension Programming Guide</a> or the <a href="#">Safari App Extensions Guide</a> and should include some functionality, such as help screens and settings interfaces where possible. You should clearly and accurately disclose what extensions are made available in the app’s marketing text, and the extensions may not include marketing, advertising, or in-app purchases.</p>
                            <ul class="no-bullet margin-top-small">
                                <li id="4.4.1"><strong>4.4.1</strong> Keyboard extensions have some additional rules.<br>
                                    <p>They must:</p>
                                    <ul class="disc margin-top-small">
                                        <li>Provide keyboard input functionality (e.g. typed characters);</li>
                                        <li>Follow Sticker guidelines if the keyboard includes images or emoji;</li>
                                        <li>Provide a method for progressing to the next keyboard;</li>
                                        <li>Remain functional without full network access and without requiring full access;</li>

                                        <li>Collect user activity only to enhance the functionality of the user’s keyboard extension on the iOS device.</li>
                                    </ul>
                                    <p>They must not:</p>
                                    <ul class="disc margin-top-small">
                                        <li>Launch other apps besides Settings; or</li>
                                        <li>Repurpose keyboard buttons for other behaviors (e.g. holding down the “return” key to launch the camera).</li>
                                    </ul>
                                </li>
                                <li id="4.4.2"><strong>4.4.2</strong> Safari extensions must run on the current version of Safari on macOS. They may not interfere with System or Safari UI elements and must never include malicious or misleading content or code. Violating this rule will lead to removal from the Developer Program. Safari extensions should not claim access to more websites than strictly necessary to function.</li>
                                <li id="4.4.3"><strong>4.4.3</strong> Stickers
                                    <p>Stickers are a great way to make Messages more dynamic and fun, letting people express themselves in clever, funny, meaningful ways. Whether your app contains a sticker extension or you’re creating free-standing sticker packs, its content shouldn’t offend users, create a negative experience, or violate the law.</p>
                                    <ul class="no-bullet margin-top-small">
                                        <li><strong>(i)</strong> In general, if it wouldn’t be suitable for the <span class="nowrap">App&nbsp;Store,</span> it doesn’t belong in a sticker.</li>
                                        <li><strong>(ii)</strong> Consider regional sensitivities, and do not make your sticker pack available in a country where it could be poorly received or violate local law.</li>
                                        <li><strong>(iii)</strong> If we don’t understand what your stickers mean, include a clear explanation in your review notes to avoid any delays in the review process.</li>
                                        <li><strong>(iv)</strong> Ensure your stickers have relevance beyond your friends and family; they should not be specific to personal events, groups, or relationships.</li>
                                        <li><strong>(v)</strong> You must have all the necessary copyright, trademark, publicity rights, and permissions for the content in your stickers, and shouldn’t submit anything unless you’re authorized to do so. Keep in mind that you must be able to provide verifiable documentation upon request. Apps with sticker content you don’t have rights to use will be removed from the App&nbsp;Store and repeat offenders will be removed from the Developer Program. If you believe your content has been infringed by another provider, <a href="#">submit a claim here</a>.</li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </div>
                    <div class="page-section" id="">
                        <li data-sidenav="4.5 Apple Sites and Services" id="apple-sites-and-services"><span id="4.5"></span><strong>4.5 Apple Sites and Services</strong>
                            <ul class="no-bullet margin-top-small">
                                <li id="4.5.1"><strong>4.5.1</strong> Apps may use approved Apple RSS feeds such as the iTunes Store RSS feed, but may not scrape any information from Apple sites (e.g. apple.com, the iTunes Store, <span class="nowrap">App&nbsp;Store,</span> <span class="nowrap">App&nbsp;Store Connect,</span> developer portal, etc.) or create rankings using this information.</li>
                                <li id="4.5.2"><strong>4.5.2</strong> Apple Music
                                    <ul class="no-bullet margin-top-small">
                                        <li><strong>(i)</strong> The MusicKit APIs let customers access their subscription while using your app. They are intended for simple music playback by Apple Music subscribers. Users must initiate the playback of an Apple Music stream and be able to navigate using standard media controls such as “play,” “pause,” and “skip.” Moreover, your app may not require payment or indirectly monetize access to the Apple Music service (e.g. in-app purchase, advertising, requesting user info, etc.). Do not download, upload, or enable sharing of music files sourced from the MusicKit APIs, except as explicitly permitted in <a href="#">MusicKit</a> documentation. </li>
                                        <li><strong>(ii)</strong> Using the MusicKit APIs is not a replacement for securing the licenses you might need for a deeper or more complex music integration. For example, if you want your app to play a specific song at a particular moment, or to create audio or video files that can be shared to social media, you’ll need to contact rights-holders directly to get their permission (e.g. synchronization or adaptation rights) and assets. Cover art and other metadata may only be used in connection with music playback or playlists (including App&nbsp;Store screenshots displaying your app’s functionality), and should not be used in any marketing or advertising without getting specific authorization from rights-holders. Make sure to follow the <a href="#">Apple Music Identity Guidelines</a> when integrating Apple Music services in your app.</li>
                                        <li><strong>(iii)</strong> Apps that access Apple Music user data, such as playlists and favorites, must clearly disclose this access in the purpose string. Any data collected may not be shared with third parties for any purpose other than supporting or improving the app experience. This data may not be used to identify users or devices, or to target advertising. </li>
                                    </ul>
                                </li><li id="4.5.3"><strong>4.5.3</strong> Do not use Apple Services to spam, phish, or send unsolicited messages to customers, including Game Center, Push Notifications, etc. Do not attempt to reverse lookup, trace, relate, associate, mine, harvest, or otherwise exploit Player IDs, aliases, or other information obtained through Game Center, or you will be removed from the Developer Program.</li>
                                <li id="4.5.4"><strong>4.5.4</strong> Push Notifications must not be required for the app to function, and should not be used for advertising, promotions, or direct marketing purposes or to send sensitive personal or confidential information. Abuse of these services may result in revocation of your privileges.</li>
                                <li id="4.5.5"><strong>4.5.5</strong> Only use Game Center Player IDs in a manner approved by the Game Center terms and do not display them in the app or to any third party.</li>
                                <li id="4.5.6"><strong>4.5.6</strong> Apps may use Unicode characters that render as Apple emoji in their app and app metadata. Apple emoji may not be used on other platforms or embedded directly in your app binary.</li>
                            </ul>
                        </li>
                    </div>
                    <div class="page-section" id="">
                        <li data-sidenav="4.6 Alternate App Icons" id="alternate-app-icons"><span id="4.6"></span><strong>4.6 Alternate App Icons</strong>
                            <p>Apps may display customized icons, for example, to reflect a sports team preference, provided that each change is initiated by the user and the app includes settings to revert to the original icon. All icon variants must relate to the content of the app and changes should be consistent across all system assets, so that the icons displayed in Settings, Notifications, etc. match the new springboard icon. This feature may not be used for dynamic, automatic, or serial changes, such as to reflect up-to-date weather information, calendar notifications, etc.</p></li>
                        </div>
                    <div class="page-section" id="">
                        <li data-sidenav="4.7 HTML5 Games, Bots, etc." id="third-party-software"><span id="4.7"></span><strong>4.7 HTML5 Games, Bots, etc.</strong>
                            <p>Apps may contain or run code that is not embedded in the binary (e.g. HTML5-based games, bots, etc.), as long as code distribution isn’t the main purpose of the app, the code is not offered in a store or store-like interface, and provided that the software (1) is free or purchased using in-app purchase; (2) only uses capabilities available in a standard WebKit view (e.g. it must open and run natively in Safari without modifications or additional software); your app must use WebKit and JavaScript Core to run third-party software and should not attempt to extend or expose native platform APIs to third-party software; (3) is offered by developers that have joined the <span class="nowrap">Apple Developer</span> Program and signed the <span class="nowrap">Apple Developer</span> Program License Agreement; (4) does not provide access to real money gaming, lotteries, or charitable donations; (5) adheres to the terms of these App Review Guidelines (e.g. does not include objectionable content); and (6) does not support digital commerce. Upon request, you must provide an index of software and metadata available in your app. It must include <span class="nowrap">Apple Developer</span> Program Team IDs for the providers of the software along with a URL which App Review can use to confirm that the software complies with the requirements above.</p></li>

                        <li data-sidenav="4.8 Sign in with Apple" id="sign-in-with-apple"><span id="4.8"></span><strong>4.8 Sign in with Apple</strong>
                            <p>Apps that exclusively use a third-party or social login service (such as Facebook Login, Google Sign-In, Sign in with Twitter, Sign In with LinkedIn, Login with Amazon, or WeChat Login) to set up or authenticate the user’s primary account with the app must also offer Sign in with Apple as an equivalent option. A user’s primary account is the account they establish with your app for the purposes of identifying themselves, signing in, and accessing your features and associated services.</p>
                            <p>Sign in with Apple is not required if:
                                </p><ul class="disc margin-top-small">
                                    <li>Your app exclusively uses your company’s own account setup and sign-in systems.</li>
                                    <li>Your app is an education, enterprise, or business app that requires the user to sign in with an existing education or enterprise account.</li>
                                    <li>Your app uses a government or industry-backed citizen identification system or electronic ID to authenticate users.</li>
                                    <li>Your app is a client for a specific third-party service and users are required to sign in to their mail, social media, or other third-party account directly to access their content.</li>
                                </ul>
                            <p></p>
                        </li>                               
                    </ul>
        </div>
        <div class="page-section" id="">
            <h3 data-sidenav="" id="legal"><span id="5"></span>5. Legal</h3>
                    <p class="section-intro">Apps must comply with all legal requirements in any location where you make them available (if you’re not sure, check with a lawyer). We know this stuff is complicated, but it is your responsibility to understand and make sure your app conforms with all local laws, not just the guidelines below. And of course, apps that solicit, promote, or encourage criminal or clearly reckless behavior will be rejected. In extreme cases, such as apps that are found to facilitate human trafficking and/or the exploitation of children, appropriate authorities will be notified.</p>
                     </div>
                <div class="page-section" id="">
                    <ul class="no-bullet">
                        <li data-sidenav="5.1 Privacy" id="privacy"><span id="5.1"></span><strong>5.1 Privacy</strong>
                            <p>Protecting user privacy is paramount in the Apple ecosystem, and you should use care when handling personal data to ensure you’ve complied with <a href="#">privacy best practices</a>, applicable laws and the terms of the <a href="#"><span class="nowrap">Apple Developer</span> Program License Agreement</a>, not to mention customer expectations. More particularly:</p>
                             </div>
                        <div class="page-section" id="">
                            <ul class="no-bullet margin-top-small">
                                <li data-sidenav="5.1.1 Data Collection and Storage" id="data-collection-and-storage"><span id="5.1.1"></span><strong>5.1.1 Data Collection and Storage</strong>
                                    <ul class="no-bullet margin-top-small">
                                        <li><strong>(i) Privacy Policies: </strong>All apps must include a link to their privacy policy in the <span class="nowrap">App&nbsp;Store Connect</span> metadata field and within the app in an easily accessible manner. The privacy policy must clearly and explicitly:
                                            <ul class="disc">
                                                <li>Identify what data, if any, the app/service collects, how it collects that data, and all uses of that data.</li>
                                                <li>Confirm that any third party with whom an app shares user data (in compliance with these Guidelines) — such as analytics tools, advertising networks and third-party SDKs, as well as any parent, subsidiary or other related entities that will have access to user data — will provide the same or equal protection of user data as stated in the app’s privacy policy and required by these Guidelines.</li>
                                                <li>Explain its data retention/deletion policies and describe how a user can revoke consent and/or request deletion of the user’s data.</li>
                                            </ul>
                                        </li>
                                        <li><strong>(ii) Permission </strong>Apps that collect user or usage data must secure user consent for the collection, even if such data is considered to be anonymous at the time of or immediately following collection. Paid functionality must not be dependent on or require a user to grant access to this data. Apps must also provide the customer with an easily accessible and understandable way to withdraw consent. Ensure your purpose strings clearly and completely describe your use of the data. Apps that collect data for a legitimate interest without consent by relying on the terms of the European Union’s General Data Protection Regulation (“GDPR”) or similar statute must comply with all terms of that law. Learn more about <a href="#">Requesting Permission</a>.</li>
                                        <li><strong>(iii) Data Minimization: </strong>Apps should only request access to data relevant to the core functionality of the app and should only collect and use data that is required to accomplish the relevant task. Where possible, use the out-of-process picker or a share sheet rather than requesting full access to protected resources like Photos or Contacts.</li>
                                        <li><strong>(iv) Access </strong>Apps must respect the user’s permission settings and not attempt to manipulate, trick, or force people to consent to unnecessary data access. For example, apps that include the ability to post photos to a social network must not also require microphone access before allowing the user to upload photos. Where possible, provide alternative solutions for users who don’t grant consent. For example, if a user declines to share Location, offer the ability to manually enter an address.</li>
                                        <li><strong>(v) Account Sign-In: </strong>If your app doesn’t include significant account-based features, let people use it without a log-in. Apps may not require users to enter personal information to function, except when directly relevant to the core functionality of the app or required by law. If your core app functionality is not related to a specific social network (e.g. Facebook, WeChat, Weibo, Twitter, etc.), you must provide access without a login or via another mechanism. Pulling basic profile information, sharing to the social network, or inviting friends to use the app are not considered core app functionality. The app must also include a mechanism to revoke social network credentials and disable data access between the app and social network from within the app. An app may not store credentials or tokens to social networks off of the device and may only use such credentials or tokens to directly connect to the social network from the app itself while the app is in use.</li>
                                        <li><strong>(vi) </strong>Developers that use their apps to surreptitiously discover passwords or other private data will be removed from the Developer Program.</li>
                                        <li><strong>(vii) </strong>SafariViewController must be used to visibly present information to users; the controller may not be hidden or obscured by other views or layers. Additionally, an app may not use SafariViewController to track users without their knowledge and consent.</li>
                                        <li><strong>(viii) </strong>Apps that compile personal information from any source that is not directly from the user or without the user’s explicit consent, even public databases, are not permitted on the <span class="nowrap">App&nbsp;Store.</span></li>
                                    </ul>
                                </li>
                                 </div>
                            <div class="page-section" id="">
                                <li data-sidenav="5.1.2 Data Use and Sharing" id="data-use-and-sharing"><span id="5.1.2"></span><strong>5.1.2 Data Use and Sharing</strong>
                                    <ul class="no-bullet margin-top-small">
                                        <li><strong>(i) </strong>Unless otherwise permitted by law, you may not use, transmit, or share someone’s personal data without first obtaining their permission. You must provide access to information about how and where the data will be used. Data collected from apps may only be shared with third parties to improve the app or serve advertising (in compliance with the <a href="#"><span class="nowrap">Apple Developer</span> Program License Agreement</a>.). Apps that share user data without user consent or otherwise complying with data privacy laws may be removed from sale and may result in your removal from the <span class="nowrap">Apple Developer</span> Program.</li>
                                        <li><strong>(ii) </strong>Data collected for one purpose may not be repurposed without further consent unless otherwise explicitly permitted by law. </li>
                                        <li><strong>(iii) </strong>Apps should not attempt to surreptitiously build a user profile based on collected data and may not attempt, facilitate, or encourage others to identify anonymous users or reconstruct user profiles based on data collected from Apple-provided APIs or any data that you say has been collected in an “anonymized,” “aggregated,” or otherwise non-identifiable way.</li>
                                        <li><strong>(iv) </strong>Do not use information from Contacts, Photos, or other APIs that access user data to build a contact database for your own use or for sale/distribution to third parties, and don’t collect information about which other apps are installed on a user’s device for the purposes of analytics or advertising/marketing.</li>
                                        <li><strong>(v) </strong>Do not contact people using information collected via a user’s Contacts or Photos, except at the explicit initiative of that user on an individualized basis; do not include a Select All option or default the selection of all contacts. You must provide the user with a clear description of how the message will appear to the recipient before sending it (e.g. What will the message say? Who will appear to be the sender?). </li>
                                        <li><strong>(vi) </strong>Data gathered from the HomeKit API, HealthKit, Consumer Health Records API, MovementDisorder APIs, ClassKit or from depth and/or facial mapping tools (e.g. ARKit, Camera APIs, or Photo APIs) may not be used for marketing, advertising or use-based data mining, including by third parties. Learn more about best practices for implementing <a href="#">CallKit</a>, <a href="#">HealthKit</a>, <a href="#">ClassKit</a>, and <a href="#">ARKit</a>.</li>
                                        <li><strong>(vii) </strong>Apps using Apple Pay may only share user data acquired via Apple Pay with third parties to facilitate or improve delivery of goods and services.</li>
                                    </ul>
                                </li>
                                 </div>
                            <div class="page-section" id="">
                                <li data-sidenav="5.1.3 Health and Health Research" id="health-and-health-research"><span id="5.1.3"></span><strong>5.1.3 Health and Health Research</strong>
                                    <p>Health, fitness, and medical data are especially sensitive and apps in this space have some additional rules to make sure customer privacy is protected:</p>
                                    <ul class="no-bullet margin-top-small">
                                        <li><strong>(i)</strong> Apps may not use or disclose to third parties data gathered in the health, fitness, and medical research context—including from the Clinical Health Records API, HealthKit&nbsp;API, Motion and Fitness, MovementDisorderAPIs, or health-related human subject research—for advertising, marketing, or other use-based data mining purposes other than improving health management, or for the purpose of health research, and then only with permission. Apps may, however, use a user’s health or fitness data to provide a benefit directly to that user (such as a reduced insurance premium), provided that the app is submitted by the entity providing the benefit, and the data is not be shared with a third party. You must disclose the specific health data that you are collecting from the device.</li>
                                        <li><strong>(ii)</strong> Apps must not write false or inaccurate data into HealthKit or any other medical research or health management apps, and may not store personal health information in iCloud.</li>
                                        <li><strong>(iii)</strong> Apps conducting health-related human subject research must obtain consent from participants or, in the case of minors, their parent or guardian. Such consent must include the (a) nature, purpose, and duration of the research; (b) procedures, risks, and benefits to the participant; (c) information about confidentiality and handling of data (including any sharing with third parties); (d) a point of contact for participant questions; and (e) the withdrawal process.</li>
                                        <li><strong>(iv)</strong> Apps conducting health-related human subject research must secure approval from an independent ethics review board. Proof of such approval must be provided upon request.</li>
                                    </ul>
                                </li>
                                 </div>
                            <div class="page-section" id="">
                                <li data-sidenav="5.1.4 Kids" id="kids"><span id="5.1.4"></span><strong>5.1.4 Kids</strong>
                                    <p>For many reasons, it is critical to use care when dealing with personal data from kids, and we encourage you to carefully review all the requirements for complying with laws like the Children’s Online Privacy Protection Act (“COPPA”), the European Union’s General Data Protection Regulation (“GDPR”), and any other applicable regulations or laws.</p>
                                    <p>Apps may ask for birthdate and parental contact information only for the purpose of complying with these statutes, but must include some useful functionality or entertainment value regardless of a person’s age.</p>
                                    <p>Apps intended primarily for kids should not include third-party analytics or third-party advertising. This provides a safer experience for kids. In limited cases, third-party analytics and third-party advertising may be permitted provided that the services adhere to the same terms set forth in <a href="#">Guideline 1.3</a>.</p>
                                    <p>Moreover, apps in the Kids Category or those that collect, transmit, or have the capability to share personal information (e.g. name, address, email, location, photos, videos, drawings, the ability to chat, other personal data, or persistent identifiers used in combination with any of the above) from a minor must include a privacy policy and must comply with all applicable children’s privacy statutes. For the sake of clarity, the <a href="#">parental gate requirement</a> for the Kid’s Category is generally not the same as securing parental consent to collect personal data under these privacy statutes.</p>
                                    <p>As a reminder, <a href="#">Guideline 2.3.8</a> requires that use of terms like “For Kids” and “For Children” in app metadata is reserved for the Kids Category. Apps not in the Kids Category cannot include any terms in app name, subtitle, icon, screenshots or description that imply the main audience for the app is children.</p>
                                </li>
                                 </div>
                                <div class="page-section" id="">
                                <li data-sidenav="5.1.5 Location Services" id="location"><span id="5.1.5"></span><strong>5.1.5 Location Services</strong>
                                    <p>Use Location services in your app only when it is directly relevant to the features and services provided by the app. Location-based APIs shouldn’t be used to provide emergency services or autonomous control over vehicles, aircraft, and other devices, except for small devices such as lightweight drones and toys, or remote control car alarm systems, etc. Ensure that you notify and obtain consent before collecting, transmitting, or using location data. If your app uses location services, be sure to explain the purpose in your app; refer to the <a href="#">Human Interface Guidelines</a> for best practices on doing so.</p>
                                </li>
                            </ul>
                        </li>
                         </div>
                    <div class="page-section" id="">
                        <li data-sidenav="5.2 Intellectual Property" id="intellectual-property"><span id="5.2"></span><strong>5.2 Intellectual Property</strong>
                            <p>Make sure your app only includes content that you created or that you have a license to use. Your app may be removed if you’ve stepped over the line and used content without permission. Of course, this also means someone else’s app may be removed if they’ve “borrowed” from your work. If you believe your intellectual property has been infringed by another developer on the <span class="nowrap">App&nbsp;Store,</span> submit a claim via our <a href="#">web form</a>. Laws differ in different countries, but at the very least, make sure to avoid the following common errors:</p>
                            <ul class="no-bullet margin-top-small">
                                <li id="5.2.1"><strong>5.2.1</strong> Generally: Don’t use protected third-party material such as trademarks, copyrighted works, or patented ideas in your app without permission, and don’t include misleading, false, or copycat representations, names, or metadata in your app bundle or developer name. Apps should be submitted by the person or legal entity that owns or has licensed the intellectual property and other relevant rights and is responsible for offering any services provided by the app.</li>
                                <li id="5.2.2"><strong>5.2.2</strong> Third-Party Sites/Services: If your app uses, accesses, monetizes access to, or displays content from a third-party service, ensure that you are specifically permitted to do so under the service’s terms of use. Authorization must be provided upon request.</li>
                                <li id="5.2.3"><strong>5.2.3</strong> Audio/Video Downloading: Apps should not facilitate illegal file sharing or include the ability to save, convert, or download media from third-party sources (e.g. Apple Music, YouTube, SoundCloud, Vimeo, etc.) without explicit authorization from those sources. Streaming of audio/video content may also violate Terms of Use, so be sure to check before your app accesses those services. Documentation must be provided upon request.</li>
                                <li id="5.2.4"><strong>5.2.4</strong> Apple Endorsements: Don’t suggest or infer that Apple is a source or supplier of the App, or that Apple endorses any particular representation regarding quality or functionality. If your app is selected as an “Editor’s Choice,” Apple will apply the badge automatically.</li>
                                <li id="5.2.5"><strong>5.2.5</strong> Apple Products: Don’t create an app that appears confusingly similar to an existing Apple product, interface (e.g. Finder), app (such as the <span class="nowrap">App&nbsp;Store,</span> <span class="nowrap">iTunes Store,</span> or Messages) or advertising theme. Apps and extensions, including third-party keyboards and Sticker packs, may not include Apple emoji. iTunes music previews may not be used for their entertainment value (e.g. as the background music to a photo collage or the soundtrack to a game) or in any other unauthorized manner. If your app displays Activity rings, they should not visualize Move, Exercise, or Stand data in a way that resembles the Activity control. The <a href="#">Human Interface Guidelines</a> have more information on how to use Activity rings.</li>
                            </ul>
                        </li>
                         </div>
                    <div class="page-section" id="">
                        <li data-sidenav="5.3 Gaming, Gambling, and Lotteries" id="gaming-gambling-and-lotteries"><span id="5.3"></span><strong>5.3 Gaming, Gambling, and Lotteries</strong>
                            <p>Gambling, gaming, and lotteries can be tricky to manage and tend to be one of the most regulated offerings on the <span class="nowrap">App&nbsp;Store.</span> Only include this functionality if you’ve fully vetted your legal obligations everywhere you make your app available and are prepared for extra time during the review process. Some things to keep in mind:</p>
                            <ul class="no-bullet margin-top-small">
                                <li id="5.3.1"><strong>5.3.1</strong> Sweepstakes and contests must be sponsored by the developer of the app.</li>
                                <li id="5.3.2"><strong>5.3.2</strong> Official rules for sweepstakes, contests, and raffles must be presented in the app and make clear that Apple is not a sponsor or involved in the activity in any manner.</li>
                                <li id="5.3.3"><strong>5.3.3</strong> Apps may not use in-app purchase to purchase credit or currency for use in conjunction with real money gaming of any kind, and may not enable people to purchase lottery or raffle tickets or initiate fund transfers in the app.</li>
                                <li id="5.3.4"><strong>5.3.4</strong> Apps that offer real money gaming (e.g. sports betting, poker, casino games, horse racing) or lotteries must have necessary licensing and permissions in the locations where the App is used, must be geo-restricted to those locations, and must be free on the <span class="nowrap">App&nbsp;Store.</span> Illegal gambling aids, including card counters, are not permitted on the <span class="nowrap">App&nbsp;Store.</span> Lottery apps must have consideration, chance, and a prize.</li>
                            </ul>
                        </li>
                         </div>
                    <div class="page-section" id="">
                        <li data-sidenav="5.4 VPN Apps" id="vpn-apps"><span id="5.4"></span><strong>5.4 VPN Apps</strong>
                            <p>Apps offering VPN services must utilize the <a href="#">NEVPNManager API</a> and may only be offered by developers enrolled as an organization. You must make a clear declaration of what user data will be collected and how it will be used on an app screen prior to any user action to purchase or otherwise use the service. Apps offering VPN services may not sell, use, or disclose to third parties any data for any purpose, and must commit to this in their privacy policy. VPN apps must not violate local laws, and if you choose to make your VPN app available in a territory that requires a VPN license, you must provide your license information in the App Review Notes field. Parental control, content blocking, and security apps, among others, from approved providers may also use the NEVPNManager API. Apps that do not comply with this guideline will be removed from the App&nbsp;Store and you may be removed from the <span class="nowrap">Apple Developer</span> Program.</p>
                        </li>
                         </div>
                    <div class="page-section" id="">
                        <li data-sidenav="5.5 Mobile Device Management" id="mobile-device-management"><span id="5.5"></span><strong>5.5 Mobile Device Management</strong>
                            <p>Mobile Device Management Apps that offer Mobile Device Management (MDM) services must request this capability from Apple. Such apps may only be offered by commercial enterprises (such as business organizations, educational institutions, or government agencies), and in limited cases, companies using MDM for parental control services. You must make a clear declaration of what user data will be collected and how it will be used on an app screen prior to any user action to purchase or otherwise use the service. MDM apps must not violate local laws. Apps offering MDM services may not sell, use, or disclose to third parties any data for any purpose, and must commit to this in their privacy policy. Apps that do not comply with this guideline will be removed from the App&nbsp;Store and you may be removed from the <span class="nowrap">Apple Developer</span> Program.</p>
                        </li>
                         </div>
                    <div class="page-section" id="">
                        <li data-sidenav="5.6 Developer Code of Conduct" id="code-of-conduct"><span id="5.6"></span><strong>5.6 Developer Code of Conduct</strong>
                            <p>Please treat everyone with respect, whether in your responses to App&nbsp;Store reviews, customer support requests, or when communicating with Apple, including your responses in Resolution Center. Do not engage in harassment of any kind, discriminatory practices, intimidation, bullying, and don’t encourage others to engage in any of the above.</p>
                            <p>Customer trust is the cornerstone of the <span class="nowrap">App&nbsp;Store’s</span> success. Apps should never prey on users or attempt to rip-off customers, trick them into making unwanted purchases, force them to share unnecessary data, raise prices in a tricky manner, charge for features or content that are not delivered, or engage in any other manipulative practices within or outside of the app.</p>
                        </li>
                    </ul>
                </div>
        <div class="page-section" id="">
            <h3 data-sidenav="" id="after-you-submit">After You Submit</h3>
                    <p>Once you’ve submitted your app and metadata in <span class="nowrap">App&nbsp;Store Connect</span> and you’re in the review process, here are some things to keep in mind:</p>
                    <ul class="disc top-level">
                        <li><strong>Timing</strong>: App Review will examine your app as soon as we can. However, if your app is complex or presents new issues, it may require greater scrutiny and consideration. And remember that if your app is repeatedly rejected for the same guideline violation or you’ve attempted to manipulate the App Review process, review of your app will take longer to complete. Learn more about <a href="#">App Review</a>.</li>
                        <li><strong>Status Updates</strong>: The current status of your app will be reflected in <span class="nowrap">App&nbsp;Store Connect,</span> so you can keep an eye on things from there.</li>
                        <li><strong>Expedite Requests</strong>: If you have a critical timing issue, you can <a href="#">request an expedited review</a>. Please respect your fellow developers by seeking expedited review only when you truly need it. If we find you’re abusing this system, we may reject your requests going forward.</li>
                        <li><strong>Release Date</strong>: If your release date is set for the future, the app will not appear on the App&nbsp;Store until that date, even if it is approved by App Review. And remember that it can take up to 24-hours for your app to appear on all selected storefronts.</li>
                        <li><strong>Rejections</strong>: Our goal is to apply these guidelines fairly and consistently, but nobody’s perfect. If your app has been rejected and you have questions or would like to provide additional information, please use the Resolution Center to communicate directly with the App Review team. This may help get your app on the store, and it can help us improve the App Review process or identify a need for clarity in our policies. If you still disagree with the outcome, please <a href="#">submit an appeal</a>.</li>
                    </ul>
                    <p>We’re excited to see what you come up with next!</p>
                    <p class="margin-top typography-body-reduced">Last Updated: 12 September 2019</p>
                </div>
            </div>
        </ul>
    </div>
</div>



@endsection