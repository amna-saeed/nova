@extends('layout.main')
@section('content')

<section class="inner-header-faq">
</section>


<section id="faq" class="about-content-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="blocks-img">
                    <img src="{{asset('assets/images/webImg/interneticon.png')}}" class="faq-img">
                    <h2 class="faqz-head-internet">Internet & Wi-Fi</h2>
                </div>
                <div class="accordion" id="faqAccordion">
                    <!-- Item 1 -->
                    <div class="accordion" id="faqAccordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq1" aria-expanded="false">
                                    Why is my internet speed slower on some devices compared to others?
                                <i class="fas fa-plus icon"></i>
                                </button>
                            </h2>
                            <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Device hardware matters — older Wi-Fi adapters or outdated software can limit speed. Ensure your device is up to date and close to the TPC ONT. Interference from electronics or high usage on other devices can also affect speed.
                                </div>
                            </div>
                        </div>
                    </div>
                      
            
                    <!-- Item 2 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq2" aria-expanded="false">
                                How do I optimize my Wi-Fi network for better performance with TPC ?
                                <i class="fas fa-plus icon"></i>
                            </button>
                        </h2>
                        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Place your ONT/router centrally, away from thick walls or interference. Use the TPC ONT web portal to change your Wi-Fi channel or update firmware for improved performance.
                            </div>
                        </div>
                    </div>
            
                    <!-- Item 3 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq3" aria-expanded="false">
                                Why does my TPC connection drop when many devices are connected?
                                <i class="fas fa-plus icon"></i>
                            </button>
                        </h2>
                        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Your TPCONT might be overloaded. Use the TPC ONT web portal Network Management tools to limit device connections. Consider upgrading to a higher bandwidth package for better stability
                            </div>
                        </div>
                    </div>
                    <!-- Item 4 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq4" aria-expanded="false">
                                How can I set up a guest Wi-Fi network?
                                <i class="fas fa-plus icon"></i>
                            </button>
                        </h2>
                        <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Through the TPC ONT web portal go to Network Management >Wi-Fi Settings, and enable Guest Network. Set a unique name and password to keep your main network secure.
                            </div>
                        </div>
                    </div>
                    <!-- Item 5 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq5" aria-expanded="false">
                                How do I secure my TPC Wi-Fi from unauthorized access?
                                <i class="fas fa-plus icon"></i>
                            </button>
                        </h2>
                        <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Use WPA3 encryption, set a strong password, regularly update it, and monitor connected devices using the TPC ONT web portal You can also hide your SSID or block unknown devices.
                            </div>
                        </div>
                    </div>
                    <!-- Item 6 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq6" aria-expanded="false">
                                Why doesn’t my TPC internet work after a power outage?
                                <i class="fas fa-plus icon"></i>
                            </button>
                        </h2>
                        <div id="faq6" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Restart your ONT and router. If the LOS light blinks, contact TPC <span class="redish">SupportWhatsApp at +92 51 111 111 872</span> — a site visit may be needed.
                            </div>
                        </div>
                    </div>
                    <!-- Item 7 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq7" aria-expanded="false">
                                Why does my VPN slow down the internet?
                                <i class="fas fa-plus icon"></i>
                            </button>
                        </h2>
                        <div id="faq7" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                VPNs add encryption overhead and may connect to distant servers. Test speed at speedtest.net with VPN off. Persistent issues? Contact support.
                            </div>
                        </div>
                    </div>
                    <!-- Item 8 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq8" aria-expanded="false">
                                Experiencing packet loss or frequent disconnections?
                                <i class="fas fa-plus icon"></i>
                            </button>
                        </h2>
                        <div id="faq8" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Restart your ONT/router and check cablesStill having issues? Contact support for deeper diagnosis.
                            </div>
                        </div>
                    </div>
                    <!-- Item 9 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq9" aria-expanded="false">
                                Why does my connection drop on specific apps?
                                <i class="fas fa-plus icon"></i>
                            </button>
                        </h2>
                        <div id="faq9" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                VPNs or destination server issues can cause this. Disable VPN and retry. Contact support if the issue persists.
                            </div>
                        </div>
                    </div>
                    <!-- Item 10 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq10" aria-expanded="false">
                                Can I set up a mesh network with TPC ?
                                <i class="fas fa-plus icon"></i>
                            </button>
                        </h2>
                        <div id="faq10" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Yes, TPC supports mesh networks. We also offer TPC Mesh (Huawei) systems for whole-home coverage. Contact support to ensure compatibility and setup assistance.
                            </div>
                        </div>
                    </div>
                    <!-- Item 11 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq11" aria-expanded="false">
                                Slow speeds during peak hours?
                                <i class="fas fa-plus icon"></i>
                            </button>
                        </h2>
                        <div id="faq11" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Try switching Wi-Fi channels via the TPC ONT web portal or upgrading your package. If the issue persists, contact support.
                            </div>
                        </div>
                    </div>
                    <!-- Item 12 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq12" aria-expanded="false">
                                How can I test Wi-Fi strength around my house?
                                <i class="fas fa-plus icon"></i>
                            </button>
                        </h2>
                        <div id="faq12" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Use a Wi-Fi analyzer app or check via the TPC ONT web portal.For help optimizing coverage, contact support
                            </div>
                        </div>
                    </div>
                    <!-- Item 13 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq13" aria-expanded="false">
                                Why can’t I get over 40 Mbps on Wi-Fi?
                                 <i class="fas fa-plus icon"></i>
                            </button>
                        </h2>
                        <div id="faq13" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                You're likely on the 2.4GHz band. TPC ’s Wi-Fi 6 ONT supports dual band (2.4GHz & 5GHz) for better speeds. Visit nova.net.pkfor more.Use customer portal or contact sales via <span class="redish">sales@nova.net.pk or UAN: 051-111-111-872</span>
                            </div>
                        </div>
                    </div>
                    <!-- Item 14 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq14" aria-expanded="false">
                                Common reasons for slow Wi-Fi:
                                 <i class="fas fa-plus icon"></i>
                            </button>
                        </h2>
                        <div id="faq14" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                <ul class="faq-blts">
                                    <li>Wi-Fi congestion/interference</li>
                                    <li>Distance or obstructions</li>
                                    <li>Over-utilized package</li>
                                    <li>Outdated equipment</li>
                                    <li>Contact support for tailored help</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Item 15-->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq15" aria-expanded="false">
                                Why is installation delayed?
                                 <i class="fas fa-plus icon"></i>
                            </button>
                        </h2>
                        <div id="faq15" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Delays may result from workload, prior appointments, or planning constraints. For updates, contact WhatsApp at +92 51 111 111 872
                            </div>
                        </div>
                    </div>
                    <!-- Item 16 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq16" aria-expanded="false">
                                How can I change my Wi-Fi password?
                                 <i class="fas fa-plus icon"></i>
                            </button>
                        </h2>
                        <div id="faq16" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Go to Network Management in the TPC ONT web portal or contact support via your registered number/email.
                            </div>
                        </div>
                    </div>
                    <!-- Item 17 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq17" aria-expanded="false">
                                How do I shift my connection to another location?

                                 <i class="fas fa-plus icon"></i>
                            </button>
                        </h2>
                        <div id="faq17" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Request shifting via WhatsApp at +92 51 111 111 872

                            </div>
                        </div>
                    </div>
                    <!-- Item 18 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq18" aria-expanded="false">
                                How do I upgrade my internet plan?
                                 <i class="fas fa-plus icon"></i>
                            </button>
                        </h2>
                        <div id="faq18" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Use the TPC ONT web portal or contact <span class="redish">sales via sales@nova.net.pkor UAN: 051-111-111-872</span>

                            </div>
                        </div>
                    </div>
                    <!-- Item 19 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq19" aria-expanded="false">
                                Can I get a static IP for my home network?

                                 <i class="fas fa-plus icon"></i>
                            </button>
                        </h2>
                        <div id="faq19" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Yes, available on select packages. Contact sales for details.

                            </div>
                        </div>
                    </div>
                    <!-- Item 20 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq20" aria-expanded="false">
                                How do I check service availability in my area?

                                 <i class="fas fa-plus icon"></i>
                            </button>
                        </h2>
                        <div id="faq20" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                <span class="redish"> Visit https://nova.net.pk/beta/service-areas/ </span> <br />Or <br />
                                <span class="redish">call UAN: 051-111-111-872</span>

                            </div>
                        </div>
                    </div>
                    <!-- Item 21 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq21" aria-expanded="false">
                                What’s the support team’s response time?

                                 <i class="fas fa-plus icon"></i>
                            </button>
                        </h2>
                        <div id="faq21" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Support typically responds within <span class="redish">45 minutes</span>. On-ground resolution may take 6–8 business hours.

                            </div>
                        </div>
                    </div>
                    <!-- Item 22 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq22" aria-expanded="false">
                                Where can I see my old complaints?

                                 <i class="fas fa-plus icon"></i>
                            </button>
                        </h2>
                        <div id="faq22" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                You can use customer portal to view your account details and complaint history at 
                                <a class="links-faq" href="https://customers.nova.net.pk/">https://customers.nova.net.pk/</a>
                            </div>
                        </div>
                    </div>
                    <div class="blocks-img">
                        <img src="{{asset('assets/images/webImg/router.png')}}" class="faq-img">
                        <h2 class="faqz-head-internet">ONT & Router</h2>
                    </div>
                    <!-- Item 23 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq23" aria-expanded="false">
                                ONT overheating?

                                 <i class="fas fa-plus icon"></i>
                            </button>
                        </h2>
                        <div id="faq23" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Ensure proper ventilation and no direct sunlight. Still hot? Contact support for a checkup.

                            </div>
                        </div>
                    </div>
                    <!-- Item 24 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq24" aria-expanded="false">
                                Configure port forwarding?

                                 <i class="fas fa-plus icon"></i>
                            </button>
                        </h2>
                        <div id="faq24" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Use the TPC ONT web portal: Network Management > Port Forwarding.

                            </div>
                        </div>
                    </div>
                    <!-- Item 24 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq25" aria-expanded="false">
                                No lights on the ONT?

                                 <i class="fas fa-plus icon"></i>
                            </button>
                        </h2>
                        <div id="faq25" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Check power source and adapter. Still off? Contact support.

                            </div>
                        </div>
                    </div>
                    <!-- Item 24 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq26" aria-expanded="false">
                                Is my router secure?

                                 <i class="fas fa-plus icon"></i>
                            </button>
                        </h2>
                        <div id="faq26" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Yes. New ONTs offer better speed, stability, and control.

                            </div>
                        </div>
                    </div>
                    <!-- Item 25 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq27" aria-expanded="false">
                                Red blinking LOS light?

                                 <i class="fas fa-plus icon"></i>
                            </button>
                        </h2>
                        <div id="faq27" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Your fiber link is down. A technician visit is needed. Contact support.

                            </div>
                        </div>
                    </div>
                    <!-- Item 26 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq28" aria-expanded="false">
                                ONT older than 5 years and slowing down?

                                <i class="fas fa-plus icon"></i>
                            </button>
                        </h2>
                        <div id="faq28" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Older ONTs degrade over time. TPC offers discounted replacements with advanced features like Wi-Fi 6 and dual-band support.
                            </div>
                        </div>
                    </div>
                    <!-- Item 27 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq29" aria-expanded="false">
                                Is ONT replacement effective?
                                <i class="fas fa-plus icon"></i>
                            </button>
                        </h2>
                        <div id="faq29" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Yes. New ONTs offer better speed, stability, and control via the TPC ONT web portal.
                            </div>
                        </div>
                    </div>
                    <!-- Item 27 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq30" aria-expanded="false">
                                Is my router malfunctioning?
                                <i class="fas fa-plus icon"></i>
                            </button>
                        </h2>
                        <div id="faq30" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Restart it and check lights. Test via wired connection
                            </div>
                        </div>
                    </div>
                    <!-- Item 28 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq31" aria-expanded="false">
                                How do I access my router?
                                <i class="fas fa-plus icon"></i>
                            </button>
                        </h2>
                        <div id="faq31" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Contact support from your registered number for access credentials.
                            </div>
                        </div>
                    </div>
                    <!-- Item 29-->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq32" aria-expanded="false">
                                Where are my router login details?
                                <i class="fas fa-plus icon"></i>
                            </button>
                        </h2>
                        <div id="faq32" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Check the label on the back of your device.
                            </div>
                        </div>
                    </div>
                    <!-- Item 30 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq33" aria-expanded="false">
                                How often should I replace my router?
                                <i class="fas fa-plus icon"></i>
                            </button>
                        </h2>
                        <div id="faq33" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Every 3–5 years or when issues arise.
                            </div>
                        </div>
                    </div>
                    <!-- Item 31 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq34" aria-expanded="false">
                                Can I use my own router?
                                <i class="fas fa-plus icon"></i>
                            </button>
                        </h2>
                        <div id="faq34" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Compatibility must be confirmed. Email us at <a class="" href="sales@nova.net.pk">sales@nova.net.pk</a>
                            </div>
                        </div>
                    </div>
                    <div class="blocks-img">
                        <img src="{{asset('assets/images/webImg/Cabletv.png')}}" class="faq-img">
                        <h2 class="faqz-head-internet">Cable TV</h2>
                    </div>
                   
                    <!-- Item 32 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq35" aria-expanded="false">
                                Why is the basic/analog video down on all my TVs?

                                <i class="fas fa-plus icon"></i>
                            </button>
                        </h2>
                        <div id="faq35" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                <ul class="faq-blts">
                                    <li>Please verify the physical cable connectivity to all TVs.</li>
                                    <li>If the issue is limited to one TV, try auto-tuning the channels</li>
                                    <li>If the problem continues, contact Nova Communication support via the My Nova App or WhatsApp at +92 51 111 111 872.</li>
                                </ul>
                                
                            </div>
                        </div>
                    </div>
                    <!-- Item 33 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq36" aria-expanded="false">
                                Why is there video snowing (white dots) on my Basic Cable TV?

                                <i class="fas fa-plus icon"></i>
                            </button>
                        </h2>
                        <div id="faq36" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                <ul class="faq-blts">
                                    <li>Check the cable connection between the TV and the ONT.
                                    </li>
                                    <li>Check the cable tv connector then check again cable on Tv.
                                    </li>
                                    <li>Determine if the issue appears on all or specific channels, especially those at the end of the list</li>
                                    <li>For further help, reach out via My Nova App or WhatsApp.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Item 34 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq37" aria-expanded="false">
                                : How to fix channel repetition or missing channels?

                                <i class="fas fa-plus icon"></i>
                            </button>
                        </h2>
                        <div id="faq37" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                <ul class="faq-blts">
                                    <li>Try auto-tuning your TV.
                                    </li>
                                    <li>If this does not resolve the issue, please contact support.</li>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="blocks-img">
                        <img src="{{asset('assets/images/webImg/NOVA i-TV.png')}}" class="faq-img">
                        <h2 class="faqz-head-internet"> NOVA i-TV</h2>
                    </div>
                  
                    <!-- Item 35-->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq38" aria-expanded="false">
                                Which TVs support the NOVA TV app?

                                <i class="fas fa-plus icon"></i>
                            </button>
                        </h2>
                        <div id="faq38" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Any Smart TV with Google-certified Android v-7 OS.

                            </div>
                        </div>
                    </div>
                    <!-- Item 36 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq39" aria-expanded="false">
                                How to subscribe to NOVA TV?

                                <i class="fas fa-plus icon"></i>
                            </button>
                        </h2>
                        <div id="faq39" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Contact via support <span class="redish">UAN 051 111 111 872</span>
                            </div>
                        </div>
                    </div>
                    <!-- Item 37 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq40" aria-expanded="false">
                                Why is NOVA i-TV buffering or lagging?

                                <i class="fas fa-plus icon"></i>
                            </button>
                        </h2>
                        <div id="faq40" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                               
                                <ul class="faq-blts">
                                    <li> Buffering may result from slow internet, Wi-Fi congestion, or device performance
                                    </li>
                                    <li>Use a wired Ethernet connection for optimal performance</li>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="blocks-img">
                        <img src="{{asset('assets/images/webImg/ont.png')}}" class="faq-img">
                        <h2 class="faqz-head-internet">Telephone Service</h2>
                    </div>
                    
                    <!-- Item 38 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq41" aria-expanded="false">
                                No or busy dial tone on my Nova telephone—what should I check?

                                <i class="fas fa-plus icon"></i>
                            </button>
                        </h2>
                        <div id="faq41" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                <ul class="faq-blts">
                                    <li> 
                                        Check physical handset connections.
                                    </li>
                                    <li>Try using a different ONT port or another handset.</li>
                                    <li>If unresolved, contact support.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Item 39 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq42" aria-expanded="false">
                                After dialing busy tone then what to do?

                                <i class="fas fa-plus icon"></i>
                            </button>
                        </h2>
                        <div id="faq42" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Customer contact via support 

                            </div>
                        </div>
                    </div>
                    <div class="blocks-img">
                        <img src="{{asset('assets/images/webImg/Digital Box.png')}}" class="faq-img">
                        <h2 class="faqz-head-internet">Digital Box</h2>
                    </div>
                    
                    <!-- Item 40-->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq43" aria-expanded="false">
                                Why is my Digital Box not working?

                                <i class="fas fa-plus icon"></i>
                            </button>
                        </h2>
                        <div id="faq43" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                <ul class="faq-blts">
                                    <li>Check all physical connections (TV and ONT).</li>
                                    <li>Restore settings and auto-tune the box.
                                    </li>
                                    <li>Still not working? Contact support</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Item 41 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq44" aria-expanded="false">
                                My Digital Box won’t power on—what can I do?
                                <i class="fas fa-plus icon"></i>
                            </button>
                        </h2>
                        <div id="faq44" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                <ul class="faq-blts">
                                    <li>Ensure the power button is ON and connections are secure.
                                    </li>
                                    <li>Try a different power socket or adapter</li>
                                    <li>Contact support if the issue persists</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Item 42 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq45" aria-expanded="false">
                                There is no sound on Digital Box channels—how to fix?
                                <i class="fas fa-plus icon"></i>
                            </button>
                        </h2>
                        <div id="faq45" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Re-plug HDMI or A/V cables, try different ports, and verify TV or sound system volume.
                            </div>
                        </div>
                    </div>
                    <!-- Item 43 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq46" aria-expanded="false">
                                Why are HD channels missing on my Digital Box?

                                <i class="fas fa-plus icon"></i>
                            </button>
                        </h2>
                        <div id="faq46" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Reset and retune the box. Contact support if not resolved
                            </div>
                        </div>
                    </div>
                    <!-- Item 44 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq47" aria-expanded="false">
                                Why is there video snowing on my Digital Box?

                                <i class="fas fa-plus icon"></i>
                            </button>
                        </h2>
                        <div id="faq47" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                This is likely due to a loose RF cable. Secure the connection.

                            </div>
                        </div>
                    </div>
                    <div class="blocks-img">
                        <img src="{{asset('assets/images/webImg/IPLAY Box.png')}}" class="faq-img">
                        <h2 class="faqz-head-internet">IPLAY Box</h2>
                    </div>
                    <!-- Item 45 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq48" aria-expanded="false">
                                What internet speed is required for optimal Joy Box performance?


                                <i class="fas fa-plus icon"></i>
                            </button>
                        </h2>
                        <div id="faq48" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                (Please contact Nova Communication support for recommended speeds.)
                            </div>
                        </div>
                    </div>
                    <!-- Item 46 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq49" aria-expanded="false">
                                How do I update Joy Box software?

                                <i class="fas fa-plus icon"></i>
                            </button>
                        </h2>
                        <div id="faq49" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                (Refer to the device settings or support team.)

                            </div>
                        </div>
                    </div>
                    <!-- Item 47 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq50" aria-expanded="false">
                                Why is my Joy Box buffering?

                                <i class="fas fa-plus icon"></i>
                            </button>
                        </h2>
                        <div id="faq50" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                May be due to weak Wi-Fi or low speed. Use Ethernet or strong 5GHz Wi-Fi.

                            </div>
                        </div>
                    </div>
                    <!-- Item 48-->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq51" aria-expanded="false">
                                How to reset Joy Box to factory settings?

                                <i class="fas fa-plus icon"></i>
                            </button>
                        </h2>
                        <div id="faq51" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                (Check device settings or consult Nova support.)

                            </div>
                        </div>
                    </div>
                    <div class="blocks-img">
                        <img src="{{asset('assets/images/webImg/Accounts management.png')}}" class="faq-img">
                        <h2 class="faqz-head-internet">Account Management / My Nova App</h2>
                    </div>
                    <!-- Item 49 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq52" aria-expanded="false">
                                How do I transfer account ownership or update details?

                                <i class="fas fa-plus icon"></i>
                            </button>
                        </h2>
                        <div id="faq52" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Contact Billing via My Nova App or WhatsApp.<br />Required for transfer:
                                <ul class="faq-blts">
                                    <li>CNIC</li>
                                    <li>Mobile number</li>
                                    <li>Email</li>
                                    <li>New User ID
                                    </li>
                                    <li>Rs. 1,000 transfer fee</li>
                                    <li>Clear all dues
                                    </li>
                                    <li>Security cheque(if hardware payments pending)</li>
                                    <li>Optional: package change</li>
                                </ul>
                                Note: Internet data carry-forward will reset.
                            </div>
                        </div>
                    </div>
                    <!-- Item 50-->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq53" aria-expanded="false">
                                Can I temporarily close my connection?

                                <i class="fas fa-plus icon"></i>
                            </button>
                        </h2>
                        <div id="faq53" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Yes, contact support via My Nova App.


                            </div>
                        </div>
                    </div>
                    <!-- Item 51 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq54" aria-expanded="false">
                                How can I track complaint status without calling?

                                <i class="fas fa-plus icon"></i>
                            </button>
                        </h2>
                        <div id="faq54" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Use the Complaints Tracker in the My Nova App or customer portal
                            </div>
                        </div>
                    </div>
                    <!-- Item 52 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq55" aria-expanded="false">
                                How do I log in to My Nova App?

                                <i class="fas fa-plus icon"></i>
                            </button>
                        </h2>
                        <div id="faq55" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                <ul class="faq-blts">
                                    <li>Enter your registered phone/email and password</li>
                                    <li>Forgot password? Tap Forgot Password to reset.
                                    </li>
                                </ul>
                                

                            </div>
                        </div>
                    </div>
                    <!-- Item 53 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq56" aria-expanded="false">
                                How to check internet usage?

                                <i class="fas fa-plus icon"></i>
                            </button>
                        </h2>
                        <div id="faq56" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Go to Reports and Info → Internet Usage History

                            </div>
                        </div>
                    </div>
                    <!-- Item 54-->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq57" aria-expanded="false">
                                How do I pay my bill via the app?

                                <i class="fas fa-plus icon"></i>
                            </button>
                        </h2>
                        <div id="faq57" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Open Billing → Pay Bill → Choose payment method.

                            </div>
                        </div>
                    </div>
                    <!-- Item 55-->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq58" aria-expanded="false">
                                How do I manage subscribed services?

                                <i class="fas fa-plus icon"></i>
                            </button>
                        </h2>
                        <div id="faq58" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Tap user ID → Subscribed Packages.
                            </div>
                        </div>
                    </div>
                    <!-- Item 56-->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq59" aria-expanded="false">
                                How to submit a technical complaint?

                                <i class="fas fa-plus icon"></i>
                            </button>
                        </h2>
                        <div id="faq59" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Support → Requirements/Complaints → Technical.

                            </div>
                        </div>
                    </div>
                    <!-- Item 57-->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq60" aria-expanded="false">
                                How do I update contact information?

                                <i class="fas fa-plus icon"></i>
                            </button>
                        </h2>
                        <div id="faq60" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Tap user ID → Personal Info → Edit details.

                            </div>
                        </div>
                    </div>
                    <!-- Item 58-->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq61" aria-expanded="false">
                                Where can I view complaint history?

                                <i class="fas fa-plus icon"></i>
                            </button>
                        </h2>
                        <div id="faq61" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Go to Support → Complaints History.

                            </div>
                        </div>
                    </div>
                    <!-- Item 59-->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq62" aria-expanded="false">
                                How to change login password?

                                <i class="fas fa-plus icon"></i>
                            </button>
                        </h2>
                        <div id="faq62" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Account Settings → Change Password → Enter old and new passwords.
                            </div>
                        </div>
                    </div>
                    <!-- Item 60-->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq63" aria-expanded="false">
                                I forgot my login password—how can I reset it?

                                <i class="fas fa-plus icon"></i>
                            </button>
                        </h2>
                        <div id="faq63" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                             <ul class="faq-blts">
                                <li>Tap Forgot Password on the login screen</li>
                                <li>A reset link will be sent via email and SMS.</li>
                             </ul>
                            </div>
                        </div>
                    </div>
                    <div class="blocks-img">
                        <img src="{{asset('assets/images/webImg/billing.png')}}" class="faq-img">
                        <h2 class="faqz-head-internet">Billing & Documentation</h2>
                    </div>
                    <!-- Item 61-->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq64" aria-expanded="false">
                                How to download a tax certificate?
                                <i class="fas fa-plus icon"></i>
                            </button>
                        </h2>
                        <div id="faq64" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                               <ul class="faq-blts">
                                    <li>Tax certificates are sent to your registered email.
                                    </li>
                                    <li>Or access at customer.nova.com:
                                    </li>
                                    <li>Billing → Tax Certificate → Select Year → Submit</li>
                               </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Item 62-->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq65" aria-expanded="false">
                                How to get a duplicate bill?

                                <i class="fas fa-plus icon"></i>
                            </button>
                        </h2>
                        <div id="faq65" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Check your inbox or spam folder. <br />Or log in at customer.nova.com 
                                <ul class="faq-blts">
                                    <li>Billing → Bill Info → Current or History
                                    </li>
                                    <li>Select Date Range → Submit</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Item 63-->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq66" aria-expanded="false">
                                How to get a payment receipt?

                                <i class="fas fa-plus icon"></i>
                            </button>
                        </h2>
                        <div id="faq66" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Receipts are emailed after payment <br/>Or:
                                <ul class="faq-blts">
                                    <li>Log in to customer.nova.com</li>
                                    <li>Billing → Invoice Details → Select Range → More Detail → Receipt No</li>
                                </ul>
                            </div>
                        </div>
                    </div>
            
                </div>
                {{--  --}}
            </div>
        </div>
    </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    document.querySelectorAll(".accordion-button").forEach(button => {
        button.addEventListener("click", function() {
            let icon = this.querySelector(".icon");
            document.querySelectorAll(".icon").forEach(i => {
                if (i !== icon) {
                    i.classList.replace("fa-minus", "fa-plus");
                }
            });
            icon.classList.toggle("fa-plus");
            icon.classList.toggle("fa-minus");
        });
    });
</script>



<style>
    .blocks-img {
        width: 100%;
        text-align: center;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 20px;
        align-items: anchor-center;
        margin: 20px 0px;
    } 
    .faq-img{
        height: 45px;
    }
    .accordion {
      width: 100%;
    }
    h2.faqz-head-internet {
        text-align: center;
        font-size: 32px;
        color: #da0000;
    }
    ul.faq-blts.li::maker{
        color: red !important;
    }
    ul.faq-blts {
        font-size: 17px;
        line-height: 31px;
        margin: 0px;
        color: #262626;
    }
    .accordion-item {
        border: none;
        margin-bottom: 6px;
        overflow: hidden;
        border: 1px solid #c1c1c1;
        border-radius: 7px;
    }
    .accordion-body a {
        color: #da0000;
        font-weight: 600;
    }
    .redish{
        color: #da0000;
        font-weight: 600;
    }
    .accordion-button {
        width: 100%;
        background-color: #8fbacb1f;
        color: #171616;
        font-size: 19px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 10px 20px;
        border: none;
        box-shadow: none;
        font-weight: 500;
    }
    
    .accordion-button:focus {
      box-shadow: none;
    }
    .accordion {
        width: 100%;
        margin: 0px  !important;
    }
    .accordion-button:not(.collapsed) {
        background-color: #8fbacb2e;
        color: #1f1f1f;
    }
    h2.accordion-header{
        margin: 0px !important;
    }
    .accordion-button::after {
      display: none; /* remove default arrow */
    }
    
    .accordion-button .icon {
        transition: transform 0.3s ease-in-out;
        font-size: 18px;
        background-color: #da0000;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        margin-left: auto;
        padding: 5px 6px;
        color: #fff;
    }
    
    .accordion-button[aria-expanded="true"] .icon {
      transform: rotate(-1deg); /* rotate plus to simulate 'close' */
    }
    
    .accordion-body {
        padding: 25px 20px;
        background-color: #fafafa;
        font-size: 17px;
        color: #262626;
    }
    
    
        /*  */
        p.text-ai {
            color: #090808;
            font-size: 19px;
            margin: 3px 0px 0px;
        }
        .complete-bnr-txt h1 {
            font-size: 36px;
            margin: 0px;
            line-height: 55px;
            text-transform: capitalize;
            color: #ffff;
        }
        span.red-ai {
            font-size: 56px;
            color: #da0000;
            font-weight: 800;
        }
        .complete-bnr-txt {
            margin: 60px 57px;
        }
        video.vdeo-pkgz-desk {
            width: 100%;
        }
        a.nova-ai-btn button {
            padding: 8px 18px;
            margin: 27px 0px;
            border-radius: 42px;
            border: 1px solid #da0000;
            background: #da0000;
            color: #f8f8f8;
            font-size: 17px;
            cursor: pointer;
            font-weight: 600;
        }
        a.get-faq-100 {
            line-height: 14px;
            padding: 12px 44px;
            margin: 39px 0px;
            border-radius: 42px;
            border: 1px solid #da0000;
            background: #da0000;
            color: #f8f8f8;
            font-size: 17px;
            cursor: pointer;
            font-weight: 600;
            height: 41px;
        }
        .tabs {
            display: flex;
            gap: 9px;
            position: relative;
        }
    </style>
@stop
@section('js')
@endsection

