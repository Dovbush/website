<?php

    $url = $_SERVER['REQUEST_URI'];
    $en = '/en/';
    $pos_en = stripos($url, $en);

    if ($pos_en === false) {

        $menuitem1 = '4front';
        $menuitem2 = 'Tjänster';
        $menuitem3 = 'Nyheter';
        $menuitem4 = 'Karriär';
        $menuitem5 = 'KONTAKT';

        $tags = 'Taggar';

        $maintitle = 'Din Salesforce-partner';
        $subtitle = 'Vi på 4front är ett gäng Salesforce-certifierade utvecklare, konsulter och projektledare med kontor i centrala Malmö. Vi har stor vana av att leverera alla typer av lösningar till CRM-system på absoluta toppnivå till en rad nöjda kunder både i Sverige och internationellt.';

        $fronttext = '<p>Vi på 4front levererar teknik och kunskap som hjälper ditt företag att nå sina affärsmål snabbare samtidigt som ditt företag stärker sitt varumärke. Som en Salesforce partner med kunder i Sverige, Danmark, Schweiz och i USA är 4front en CRM-konsultbyrå med möjlighet att stötta både större och mindre organisationer. Vår närvaro över flera kontinenter gör det möjligt för oss att arbetar över flera tidszoner. Dessutom är våra utvecklare Salesforce-certifierade och vi arbetar ständigt för att hålla oss uppdaterade med den senaste tekniken så att vi kan leverera med absolut högsta kvalité.</p><p>För våra kunder är vi bäst genom att vara en långsiktig partner.</p><p>För våra partners är vi bäst genom att erbjuda kompetens och erfarenhet som hjälper dem att lyckas i sina projekt och med sina utmaningar.</p><p>För våra anställda är vi bäst eftersom vi är en arbetsgivare som gör det möjligt att växa både personligt och professionellt.</p><p>För alla och allt annat är vi bäst eftersom vi tar ansvar för och försäkrar att vi gör världen till en bättre plats att leva på!</p><p>Förtroende. Kompetens. Framgång.</p>';

        $service1 = 'Konfigurering';
        $service2 = 'Utveckling';
        $service3 = 'Integration';
        $service4 = 'Support';

        $service1sub = '4front konfigurerar Salesforce snabbt och effektivt';
        $service2sub = 'Salesforce-certiferade utvecklare och vassa IT-tekniker';
        $service3sub = 'Smidig implementering av CRM-system och Salesforce';
        $service4sub = '4front - extra resurs och intern support när du behöver det';

        $service1main = 'För att implementeringen av Salesforce ska gå så snabbt och smidigt som möjligt för just ert företags specifika processer och verktyg är det viktigt att konfigureringen går rätt till. 4front har bred erfarenhet av Salesforce-konfigurering av en rad större och mindre organisationer och gör konfigureringen smidig och anpassad efter era projekt och system. Våra konsulter kan också hjälpa till med löpande konfigurationsarbete eller arbeta i projekt både före och efter konfigureringen.';
        $service2main = '4fronts utvecklare och vassa IT-tekniker hjälper dig att uppnå de resultat du vill ha på smidigast tänkbara sätt – och som Salesforce-partner kan vi garantera konsulter med kunskaper från det allra senaste inom Salesforce-plattformen. Våra utvecklare är dessutom coachade i scrum-metodik för att projekten ska genomföras så effektivt som möjligt med största möjliga fokus på kundnytta. Med Salesforce molntjänster kan du skapa anpassad logik och anpassade applikationer – och erbjuda dina kunder helt nya möjligheter. Läs mer om Salesforce under fliken Varför Salesforce & Salesforce-applikationer eller kontakta oss så berättar vi gärna mer om våra utvecklare och deras specifika kompetenser. ';
        $service3main = "4front har stor vana av implementering för medelstora och stora företag, både inom Sverige, i Danmark och globalt. Implementeringen är första steget när du ska få igång ditt CRM-system - så det är viktigt att du anlitar en erfaren konsult med agila projektledare och Salesforce-expertis. Våra Salesforce-certifierade konsulter inom CRM, marketing automation, utveckling och systemintegration levererar alla typer av IT-lösningar - och ser till att göra övergången så snabb och enkel som möjligt inför nästa steg i processen: konfigureringen.";
        $service4main = 'De flesta företag behöver periodvis extra hjälp med intern support av sina processer. 4front har flexibla konsulter och arbetar hos dig eller hos oss, med allt från projektledning och systemadministration till vanliga supportärenden eller avancerad dataåtkomst och back-end. Vi har fina referenser och nöjda kunder – både i Sverige och globalt.';

        $learnmore ='L&auml;s mer >';
        $showless = 'Visa mindre <';

        $team = 'V&aring;rt team';
        $customers = 'Våra kunder';
        $contactus = 'Kontakta oss';

        $email = 'E-post:';

        $link1 = '/nyheter';
        $link2 = '/jobb';
        $link3 = '/';

        $title1 = 'Hem';

        $cookiestext1 = "4front uses so-called session cookies ('Cookie') on the Site. A Cookie is a small information file that is transferred to the visitor's computer. Cookies can not identify the visitor personally, only the browser installed on the computer and used during the visit. Cookies do not contain viruses, nor can it destroy other information on the visitor's computer. Cookies are used to make it easier for the visitor to navigate on the Site. Cookies are stored on the computer and activated when the visitor returns to a section on the site. Cookies are only saved temporarily on the computer and disappear when the browser closes. If the visitor wants to avoid cookies, the visitor can set up your computer browser so that cookies are not downloaded to your computer. For information about how to get started, see the browser's help section. If cookies are stored, it means that the browsing capabilities on the site will deteriorate.";
         $cookiestext2 = 'IP addresses';
         $cookiestext3 = "4front also collects IP addresses. An IP address is used to identify the visitor's computer on the Internet. We use the IP addresses for system administration.";
        $cookieslink = '/cookies-2';

        $team2 = 'Alla';

        $team3 = 'Team';

        $ceo = 'VD';
        $teamlink = '/lag';

	} else {

        $menuitem1 = '4front';
        $menuitem2 = 'Services';
        $menuitem3 = 'News';
        $menuitem4 = 'Career';
        $menuitem5 = 'CONTACT';

        $tags = 'Tags';

        $maintitle = 'Your Salesforce Partner';
        $subtitle = 'We at 4front are a team of Salesforce-Certified Developers, Consultants, and Project Managers with a head office in Malmö, Sweden. We have extensive experience with delivering all kinds of solutions to CRM systems to satisfied customers, both internationally and in Sweden.';

        $fronttext = '<p>We at 4front provide technology and knowledge that will allow you to reach your business goals faster while your company strengthens its brand. As a Salesforce Partner with customers in Sweden, Denmark, Switzerland, and the United States, 4front is a CRM consultant with the ability to support both larger and smaller organizations. Our presence across different continents enables us to work tirelessly with companies across different time zones. In addition, most of our CRM developers are Salesforce Certified, and we are constantly working to keep us up to date and deliver services at the highest level.</p><p>For our customer we will be the best by being a long term partner and trusted advisor.</p><p>For our partners we will be the best by providing the competence and experience to help them succeed in their projects and challenges.</p><p>For our employees we will the best by being an employer that enables both personal and professional growth.</p><p>For everybody else and everything else we will be the best by taking responsibility and making sure we are making the world a better place. </p><p>Trust. Competence. Success.</p>';

        $service1 = 'Configurations';
        $service2 = 'Development';
        $service3 = 'Integration';
        $service4 = 'Support';

        $service1sub = '4front configures Salesforce quickly and efficiently';
        $service2sub = 'Salesforce-certified developers and subtle IT technicians';
        $service3sub = 'Smart implementation of CRM systems and Salesforce';
        $service4sub = '4front—extra resources and internal support when you need it';

        $service1main = 'For Salesforce to be implemented as quickly and intelligently as possible for specific processes and tools in your company, it’s important that the configuration be correct. 4front has broad experience with Salesforce configuration in many larger and smaller organizations and makes the configuration smart and tailored to your projects and systems. Our specialists can also assist with ongoing configuration work or work with projects both before and after the configuration.';
        $service2main = '4front developers and IT technicians help you achieve the best results you need in the smartest way—and as a Salesforce Partner, we guarantee specialists with the latest knowledge of the Salesforce platform. Our developers are also coached in scrum methodology to ensure projects are implemented as efficiently as possible with the greatest possible focus on customer benefit. With Salesforce Cloud Services, you can create custom logic and applications—and offer your customers completely new opportunities. Read more about Salesforce in the sections "Why Salesforce" and "Salesforce applications" or contact us. We’ll be pleased to tell you more about our developers and their specific skills.';
        $service3main = "4front has a long history with implementation for medium and large companies in Sweden, Denmark, and all over the world. Implementation is the first step when you get started on your CRM system—so it's important that you hire an experienced specialist for agile project manager and Salesforce expertise. Our Salesforce-certified specialists in CRM, marketing automation, development, and system integration come up with all types of IT solutions—and make the transition as quick and easy as possible before the next step of the process: configuration.";
        $service4main = 'Most companies occasionally need extra help with internal support of their processes. 4front has flexible specialists who work in your or our office, ranging from project management and system administration to common support issues or advanced data access and back-end. We have many very satisfied customers—both in Sweden and all over the world.';

        $learnmore ='Learn more >';
        $showless = 'Show less <';

        $team = 'Our team';
        $customers = 'Our customers';
        $contactus = 'Contact us';

        $email = 'Email:';

        $link1 = '/news';
        $link2 = '/vacancies';
        $link3 = '/en';

        $title1 = 'Home';

        $cookiestext1 = "4front uses so-called session cookies ('Cookie') on the Site. A Cookie is a small information file that is transferred to the visitor's computer. Cookies can not identify the visitor personally, only the browser installed on the computer and used during the visit. Cookies do not contain viruses, nor can it destroy other information on the visitor's computer. Cookies are used to make it easier for the visitor to navigate on the Site. Cookies are stored on the computer and activated when the visitor returns to a section on the site. Cookies are only saved temporarily on the computer and disappear when the browser closes. If the visitor wants to avoid cookies, the visitor can set up your computer browser so that cookies are not downloaded to your computer. For information about how to get started, see the browser's help section. If cookies are stored, it means that the browsing capabilities on the site will deteriorate.";
         $cookiestext2 = 'IP addresses';
         $cookiestext3 = "4front also collects IP addresses. An IP address is used to identify the visitor's computer on the Internet. We use the IP addresses for system administration.";
         $cookieslink = '/cookies';

         $team2 = 'All team';

         $team3 = 'Team';

         $ceo = 'CEO';
         $teamlink = '/en/team';

	}

