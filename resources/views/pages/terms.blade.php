@extends("layout.app")
@section("content")
<style>
    p{
        text-align: justify;
    }
</style>
<main id="mainContent" class="main-content fadeIn" role="main">
    <div  class="shopify-section featured-row-section">
        <div  class="  section-blank" >
       <div class="box">
         <div class="wrapper">
          <h2 style="text-align: center">{{ GoogleTranslate::trans("Terms & Conditions", app()->getLocale()) }}</h2>
          <br>
          <h3>{{ GoogleTranslate::trans("Digital Grave Memory Standard Terms of Use", app()->getLocale()) }}</h3>
          <p>{{ GoogleTranslate::trans('These Terms of Use ("Terms"), in conjunction with any Additional Terms, Policies, or Purchase Orders (collectively referred to as the "Agreement"), outline the terms and conditions governing the provision of services by Digital Grave Memory LLC and its Affiliates ("Digital Grave Memory," "we," "us") to you, the customer ("Customer," "you," "your"). These terms apply to your use of the Digital Grave Memory Platform. In case of any conflict between these Terms and transaction-specific language in a Purchase Order, the Purchase Order takes precedence.', app()->getLocale()) }}</p>
            <h3>{{ GoogleTranslate::trans("1. Your Digital Grave Memory Account", app()->getLocale()) }}</h3>
            <p>{{ GoogleTranslate::trans("You may create a Digital Grave Memory Account if you meet the age requirements. Some services necessitate having a Digital Grave Memory Account for functionality. For instance, posting or commenting on a page requires a Digital Grave Memory Account. You are responsible for the actions performed through your  Digital Grave Memory's  Account, including maintaining its security. Regularly changing your password and updating security measures is encouraged.", app()->getLocale()) }}</p>
    
            <h3>{{ GoogleTranslate::trans("2. Using Google services on behalf of an organization", app()->getLocale()) }}</h3>
            <h5>{{ GoogleTranslate::trans("To use our services on behalf of an organization:", app()->getLocale()) }}</h5>
            <ul>
                <li>{{ GoogleTranslate::trans("An authorized representative of the organization must agree to these terms.", app()->getLocale()) }}</li>
                <li>{{ GoogleTranslate::trans("Your organization's administrator may assign a Digital Grave Memory Account to you, imposing additional rules and potential access to or disabling of your Digital Grave Memory Account.", app()->getLocale()) }}</li>
            </ul>
            <h3>{{ GoogleTranslate::trans("3. Customer Responsibilities", app()->getLocale()) }}</h3>
            <h5>{{ GoogleTranslate::trans("In interacting with others through our services, you must adhere to these basic rules:", app()->getLocale()) }}</h5>
      
            <ul>
                <li>{{ GoogleTranslate::trans("Comply with applicable laws, including export control, sanctions, and human trafficking laws.", app()->getLocale()) }}</li>
                <li>{{ GoogleTranslate::trans("Respect the rights of others, including privacy and intellectual property rights.", app()->getLocale()) }}</li>
                <li>{{ GoogleTranslate::trans("Avoid abusing or harming others or yourself, and do not encourage such behavior (e.g., misleading, defrauding, bullying, harassing).", app()->getLocale()) }}</li>
                <li>{{ GoogleTranslate::trans("Refrain from abusing, harming, interfering with, or disrupting the services.", app()->getLocale()) }}</li>
           
            </ul>

            <h3>{{ GoogleTranslate::trans("4. Non-Exclusive Access Grant", app()->getLocale()) }}</h3>
            <p>{{ GoogleTranslate::trans("You are granted non-exclusive, non-transferable, and revocable access to Digital Grave Memory ’s Platform for your individual or business purposes, subject to these Terms and any transaction-specific details in an Order Form.", app()->getLocale()) }}</p>
            <h3>{{ GoogleTranslate::trans("5. Restrictions", app()->getLocale()) }}</h3>
            <p>{{ GoogleTranslate::trans("You may not reproduce, resell, assign, grant access to, license, sublicense, market, or distribute the Platform or any Digital Grave Memory Intellectual Property. Additionally, certain actions, such as reverse engineering, disabling protection mechanisms, and allowing unauthorized third parties to maintain or repair the Platform, are prohibited.", app()->getLocale()) }}</p>
         
            <h3>{{ GoogleTranslate::trans("6. Age requirements", app()->getLocale()) }}</h3>
            <p>{{ GoogleTranslate::trans("If you're under the age required to manage your own Google Account, you must have your parent or legal guardian's permission to use a Digital Grave Memory Account.", app()->getLocale()) }}</p>
       
            <h3>{{ GoogleTranslate::trans("7. Disclaimer of Warranties", app()->getLocale()) }}</h3>
            <p>{{ GoogleTranslate::trans("The Platform is provided as-is, and we disclaim any warranties, express or implied, including merchantability, fitness for a particular purpose, title, or non-infringement.", app()->getLocale()) }}</p>
            
            <h3>{{ GoogleTranslate::trans("8. Suspension/Termination", app()->getLocale()) }}</h3>
            <p>{{ GoogleTranslate::trans("You are responsible for all activity on your account. Services may be suspended or terminated for Cause, including unlawful use or actions that may harm Digital Grave Memory or a third party.", app()->getLocale()) }}</p>
            <p>{{ GoogleTranslate::trans("If we reasonably believe that your content violates these terms, applicable laws, or could harm users, third parties, or Digital Grave Memory, we reserve the right to take down the content.", app()->getLocale()) }}</p>
       
            <h3>{{ GoogleTranslate::trans("9. Compliance with Laws", app()->getLocale()) }}</h3>
            <p>{{ GoogleTranslate::trans("Both you and Digital Grave Memory shall comply with applicable laws. You are responsible for monitoring your account for illegal or fraudulent use.", app()->getLocale()) }}</p>
            
            <h3>{{ GoogleTranslate::trans("9.1. Export Restrictions", app()->getLocale()) }}</h3>
            <p>{{ GoogleTranslate::trans("Cloud Services may be subject to U.S. Export Administration Regulations. Customer shall indemnify Digital Grave Memory for any damages resulting from the failure to obtain necessary licenses.", app()->getLocale()) }}</p>
            
            <h3>{{ GoogleTranslate::trans("10. Content", app()->getLocale()) }}</h3>
            <p>{{ GoogleTranslate::trans("You retain rights to your content, and by uploading it to the Platform, you grant us a license to use, reproduce, display, distribute, and modify the content as needed for Platform functionality.", app()->getLocale()) }}</p>
            
            <h3>{{ GoogleTranslate::trans("11. Intellectual Property", app()->getLocale()) }}</h3>
            <p>{{ GoogleTranslate::trans("Digital Grave Memory remains the sole owner of all rights in the Platform and Digital Grave Memory Intellectual Property.", app()->getLocale()) }}</p>
            <h3>{{ GoogleTranslate::trans("12. Feedback", app()->getLocale()) }}</h3>
            <p>{{ GoogleTranslate::trans("If you provide Feedback, you grant us a license to use it for any legal purpose, including incorporating it into our products and services.", app()->getLocale()) }}</p>
            
            <h3>{{ GoogleTranslate::trans("13. Confidentiality", app()->getLocale()) }}</h3>
            <p>{{ GoogleTranslate::trans("Both parties will treat disclosed Confidential Information with care and not disclose it to third parties without authorization. This provision supersedes any previous agreements related to Confidential Information.", app()->getLocale()) }}</p>
            
            <h3>{{ GoogleTranslate::trans("14. Indemnification", app()->getLocale()) }}</h3>
            <p>{{ GoogleTranslate::trans("You will indemnify us from any claim, loss, or damage arising from your Content, use of the Platform, or breach of specific sections of these Terms.", app()->getLocale()) }}</p>
            <h3>{{ GoogleTranslate::trans("15. Limitation of Liability", app()->getLocale()) }}</h3>

            <p>{{ GoogleTranslate::trans("Our liability is limited, and we are not liable for certain types of damages. Specific limitations apply to the purchase of Digital Grave Memory products.", app()->getLocale()) }}</p>

            <h3>{{ GoogleTranslate::trans("16. Product-Specific Terms", app()->getLocale()) }}</h3>
            <p>{{ GoogleTranslate::trans("Certain products or services may have additional Product-Specific Terms, which will control in case of a conflict with these Terms.", app()->getLocale()) }}</p>
            <h3>{{ GoogleTranslate::trans("17. Updates to the Terms and Product-Specific Terms", app()->getLocale()) }}</h3>
            <p>{{ GoogleTranslate::trans("We may modify these Terms and Product-Specific Terms, and your continued use of the Platform after revisions constitutes acceptance.", app()->getLocale()) }}</p>
            <h3>{{ GoogleTranslate::trans("18. Non-Solicitation", app()->getLocale()) }}</h3>
            <p>{{ GoogleTranslate::trans("For a specified period, you agree not to solicit our employees without prior approval.", app()->getLocale()) }}</p>

            <h3>{{ GoogleTranslate::trans("19. Governing Law", app()->getLocale()) }}</h3>
            <p>{{ GoogleTranslate::trans("These terms and any purchase with us will be governed by Delaware law, with jurisdiction in Salt Lake County, Utah.", app()->getLocale()) }}</p>

            <h3>{{ GoogleTranslate::trans("20. Miscellaneous", app()->getLocale()) }}</h3>
            <p>{{ GoogleTranslate::trans("Various provisions cover assignment, force majeure, headings, integration, waiver, notice, publicity, severability, survival, and additional provisions.", app()->getLocale()) }}</p>
     
            
            <h3>{{ GoogleTranslate::trans("21. Definitions", app()->getLocale()) }}</h3>
            <p>{{ GoogleTranslate::trans("Definitions for terms such as Affiliate, Cause, Content, Documentation, Feedback, Infrastructure Providers, Digital Grave Memory, Order Forms, PII, Platform, Resulting Information, and others are provided for clarity.", app()->getLocale()) }}</p>
        </div>
       </div>
        </div>
    </div>
    
</main>
@endsection