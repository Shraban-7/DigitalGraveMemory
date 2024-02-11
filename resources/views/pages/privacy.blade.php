@extends("layout.layout")
@section("content")
<style>
    p{
        text-align: justify
    }
</style>
<main id="mainContent" class="main-content fadeIn" role="main">
    <div  class="shopify-section featured-row-section">
        <div  class="  section-blank" >
       <div class="box">
         <div class="wrapper">
          <h2 style="text-align: center">{{ GoogleTranslate::trans("Privacy Policy", app()->getLocale()) }}</h2>
          <br>
          <p>{{ GoogleTranslate::trans("At Digital Grave Memory, safeguarding your privacy is our utmost priority, and we are dedicated to preserving your privacy rights. We aim to elucidate the reasons behind collecting personal information, the nature of the data collected, its utilization, and the duration of storage. Additionally, we provide insights into how you can access, modify, correct, or delete your information.", app()->getLocale()) }}</p>
            <h4>{{ GoogleTranslate::trans("Who We Are", app()->getLocale()) }}</h4>
            <p>{{ GoogleTranslate::trans("When we mention Digital Grave Memory, we are referring to the Digital Grave Memory group of companies, currently encompassing the following legal entities:", app()->getLocale()) }}</p>
        
        
            <h4>{{ GoogleTranslate::trans("Digital Grave Memory LLC (“Digital Grave Memory”).", app()->getLocale()) }}</h4>
            <h4>{{ GoogleTranslate::trans("Why We Collect Information", app()->getLocale()) }}</h4>
            <p>{{ GoogleTranslate::trans("We collect personal information when you request an account or our content assets to provide valuable content and assess its efficacy for business purposes.", app()->getLocale()) }}</p>
            <p>{{ GoogleTranslate::trans("Information is gathered when you contact us to address your requests, queries, or concerns and to follow up on resolutions.", app()->getLocale()) }}</p>
        
            <p>{{ GoogleTranslate::trans("Data collection occurs when you purchase and/or use our software or services, enabling us to deliver services, communicate operational information, handle financial transactions, and comply with legal and regulatory requirements.", app()->getLocale()) }}</p>
        
            <h4>{{ GoogleTranslate::trans("What We Collect?", app()->getLocale()) }}</h4>
            <p>{{ GoogleTranslate::trans("We collect name, email, phone, address, job title, company, and details about your usage of Digital Grave Memory products or services.", app()->getLocale()) }}</p>
            <p>{{ GoogleTranslate::trans("Additional data may be obtained from contact, download, or signup forms on our website.", app()->getLocale()) }}</p>
            <p>{{ GoogleTranslate::trans("Information sent through account postings, online surveys, support tickets, or job applications is collected.", app()->getLocale()) }}</p>
            <p>{{ GoogleTranslate::trans("Anonymous information from your browser, such as IP address, operating system, and browser version, is gathered when you visit our websites.", app()->getLocale()) }}</p>
            
            <h4>{{ GoogleTranslate::trans("How We Use Information?", app()->getLocale()) }}</h4>
            <p>{{ GoogleTranslate::trans("Personal information is never sold or rented to third parties. With your explicit permission, we may share information with select partners.", app()->getLocale()) }}</p>
            <p>{{ GoogleTranslate::trans("Your information is used to evaluate the effectiveness of Digital Grave Memory products, provide operational updates, and for relevant marketing communications.", app()->getLocale()) }}</p>
      
            <p>{{ GoogleTranslate::trans("Information may be shared with vendors acting on our behalf, adhering to the policies outlined in this document.", app()->getLocale()) }}</p>
            <p>{{ GoogleTranslate::trans("Data may be transferred globally due to Digital Grave Memory's global presence.", app()->getLocale()) }}</p>
            <p>{{ GoogleTranslate::trans("Information We and Partners Collect When You Browse Our Website", app()->getLocale()) }}</p>
            <p>{{ GoogleTranslate::trans("Google Analytics and load balancer tagging are utilized.", app()->getLocale()) }}</p>
            <p>{{ GoogleTranslate::trans("Third-party scripts may be employed for web statistics, interest-based advertising, and additional website functionalities.", app()->getLocale()) }}</p>
            
            <p>{{ GoogleTranslate::trans("Cookies and local storage may be used for analytical purposes and functional site features.", app()->getLocale()) }}</p>
            
            <h4>{{ GoogleTranslate::trans("Products and Services", app()->getLocale()) }}</h4>
            <p>{{ GoogleTranslate::trans("We provide software services allowing customers to build portfolios, and customers control personal information processing.", app()->getLocale()) }}</p>
            <h4>{{ GoogleTranslate::trans("Security", app()->getLocale()) }}</h4>
            <p>{{ GoogleTranslate::trans("Personal data is stored in secure environments, and employees undergo data protection training.", app()->getLocale()) }}</p>
            
            <p>{{ GoogleTranslate::trans("Vendors and service providers adhere to high privacy standards through data processing agreements.", app()->getLocale()) }}</p>
            
            <h4>{{ GoogleTranslate::trans("Your Choices and Rights", app()->getLocale()) }}</h4>
            <p>{{ GoogleTranslate::trans("Opt-out of marketing communications at any time.", app()->getLocale()) }}</p>
            <p>{{ GoogleTranslate::trans("EU individuals have rights to access, correct, delete, or limit data processing.", app()->getLocale()) }}</p>
            <p>{{ GoogleTranslate::trans("How to Opt Out of Marketing and Web Tracking", app()->getLocale()) }}</p>
            <p>{{ GoogleTranslate::trans("Opt-out links in marketing emails and the option to disable web tracking in browsers are available.", app()->getLocale()) }}</p>
       
            <p>{{ GoogleTranslate::trans("Opt-out of individual services we use for web tracking.", app()->getLocale()) }}</p>
            <p>{{ GoogleTranslate::trans("Your Rights as an EU Individual", app()->getLocale()) }}</p>
            <p>{{ GoogleTranslate::trans("Access, correct, delete, or limit data processing; object to direct marketing; and withdraw consent.", app()->getLocale()) }}</p>
            <p>{{ GoogleTranslate::trans("Submitting a Complaint", app()->getLocale()) }}</p>
            <p>{{ GoogleTranslate::trans("EU residents can contact the Data Protection Officer at dpo@digitalgravememory.com.", app()->getLocale()) }}</p>
            <p>{{ GoogleTranslate::trans("Complaints can also be lodged with the Swedish Data Protection Authority.", app()->getLocale()) }}</p>
            
            <p><b>{{ GoogleTranslate::trans("Email:", app()->getLocale()) }}</b></p>
            <p>compliance@digitalgravememory.com</p>
            <p>{{ GoogleTranslate::trans("For Residents in California:", app()->getLocale()) }}</p>
            <p>{{ GoogleTranslate::trans("Special privacy rights apply.", app()->getLocale()) }}</p>
            <p>{{ GoogleTranslate::trans("Contact Us (Outside the EU):", app()->getLocale()) }}</p>
            <p>{{ GoogleTranslate::trans("Digital Grave Memory", app()->getLocale()) }}</p>

            <p>{{ GoogleTranslate::trans("452, Senpara, Parbata", app()->getLocale()) }}</p>
            <p>{{ GoogleTranslate::trans("Dhaka, Bangladesh.", app()->getLocale()) }}</p>
            <p>legal@digitalgravememory.com</p>
        </div>
       </div>
        </div>
    </div>
    
</main>
@endsection