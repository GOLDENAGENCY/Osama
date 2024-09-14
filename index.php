<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GOLDEN AGENCY </title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="logo">
            <img src="img/00.jpg" alt="GOLDEN AGENCY Logo">
        </div>
        <nav>
            <ul>
                <li><a href="#about" class="arabic">نبذة</a><a href="#about" class="english hidden">About</a></li>
                <li><a href="#projects" class="arabic">مشاريعنا</a><a href="#projects" class="english hidden">Projects</a></li>
                <li><a href="#goals" class="arabic">أهدافنا</a><a href="#goals" class="english hidden">Goals</a></li>
                <li><a href="#contact" class="arabic">تواصل معنا</a><a href="#contact" class="english hidden">Contact Us</a></li>
            </ul>
            <div class="language-switcher" onclick="toggleLanguage()">ُEN</div>
        </nav>
    </header>

    <section id="hero">
        <div class="overlay"></div>
        <div class="content">
            <h1 class="arabic">GOLDEN AGENCY</h1>
            <h1 class="english hidden">GOLDEN AGENCY</h1>
            <img src="img/20.png" alt="GOLDEN AGENCY" width="426" height="195">
            <p class="arabic">نحن نجعل النجاح مضمونًا</p>
            <p class="english hidden">We Make Success Guaranteed</p>
        </div>
    </section>

    <section id="about">
        <h2 class="arabic">GOLDEN AGENCY</h2>
        <h2 class="english hidden">GOLDEN AGENCY</h2>
        <img src="img/23.png" alt="نبذة عن المكتب" width="457" height="396">
        <p class="arabic"> نحن فريق متخصص في تقديم خدمات التسويق الشاملة، إدارة المشاريع، وتنفيذ الحملات الإعلانية على كافة المنصات. نعمل على تطوير استراتيجيات تسويقية مبتكرة تضمن نجاح مشروعك بنسبة 100%. لدينا أكثر من 6 سنوات من الخبرة في هذا المجال، ونسعى دائماً لتقديم الأفضل بما يضمن راحة عملائنا وثقتهم في خدماتنا. </p>
        <p class="english hidden"> We are a specialized team offering comprehensive marketing services, project management, and advertising campaigns across all platforms. We develop innovative marketing strategies that guarantee your project's success 100%. With over 6 years of experience in the field, we are committed to providing top-tier services that ensure our clients' comfort and trust. </p>
    </section>

    <section id="projects">
        <h2 class="arabic">أعمالنا</h2>
        <h2 class="english hidden">Our Projects</h2>
        <img src="img/15.png" alt="Our Projects" width="348" height="175">
        <div class="projects-container">
            <div class="project" onclick="showProject('project1')">
              <section>
                <a href="project1.html">
                        <h3 class="arabic">مشروع التسويق الرقمي لشركة</h3>
                <h3 class="english hidden">Digital Marketing Project for a Company</h3>
                  </a>
                <a href="project1.php"><img src="img/4.jpg" alt="مشروع 1" width="348" height="348"></a>
            </section> 
                
                
            </div>
            <div class="project" onclick="showProject('project2')">
               <section>
                <a href="project2.php">
                <h3 class="arabic">إدارة حملة إعلانية لمنصة</h3>
                <h3 class="english hidden">Advertising Campaign Management for a Platform</h3>
                <img src="img/3.png" alt="مشروع 2" width="346" height="196">
                
               </a>
            </section> 
               
            </div>
            <div class="project" onclick="showProject('project3')">
                <section>
                    <a href="project3.php">
                    <h3 class="arabic"> انشاء وتطويرالتصاميم واللوجو الاحترافية </h3>
                    <h3 class="english hidden">Create and develop professional designs and logos </h3>
                    <img src="img/11.webp" alt="مشروع 3" width="348" height="175">
                </a>
            </section>
            </div>

            </div>
            <div class="project" onclick="showProject('project4')">
                <section>
                    <a href="project3.php">
                    <h3 class="arabic"> انشاء وتطوير تصاميم احترافية للمواقع الإلكترونيه  </h3>
                    <h3 class="english hidden">Create and develop professional designs for websites </h3>
                    <img src="img/27.png" alt="مشروع 4" width="348" height="175">
                </a>
            </section>
            </div>
        </div>

        
       
    </section>

   

    <section id="goals">
        <h2 class="arabic">أهدافنا</h2>
        <h2 class="english hidden">Our Goals</h2>
        <img src="img/16.png" alt="الهدف الرئيسي" width="530" height="257" class="main-goal">

        <div class="goals-container">
            <div class="goals" onclick="showProject('goals1')">
              <section>
              <h3 class="arabic">     💡 : ١- تقديم حلول تسويقية مبتكرة </h3>
            <h3 class="english hidden">1.Deliver Innovative Marketing Solutions: 💡</h3>
            <img src="img/22.png" alt="goals1" width="348" height="175">
            <p class="arabic"> .نهدف إلى تقديم خطط تسويقية حديثة وفعّالة تساعد عملاءنا على التميز في السوق وزيادة فرص النجاح</p>
            <p class="english hidden">We aim to provide modern and effective marketing plans that help our clients stand out in the market and increase their chances of success.</p>
              </section> 
            </div>
            
            <div class="goals-container">
            <div class="goals" onclick="showProject('goals2')">
              <section>
              <h3 class="arabic">                📈 : ٢- تعزيز نمو الأعمال  </h3>
            <h3 class="english hidden">2.Foster Business Growth: 📈</h3>
            <img src="img/13.png" alt="goals2" width="348" height="175">
            <p class="arabic"> .نسعى لدعم عملائنا في تحقيق النمو المستدام من خلال استراتيجيات تسويق متكاملة وشاملة تلبي احتياجاتهم وتحقق أهدافهم التجارية</p>
            <p class="english hidden"> Our goal is to support our clients in achieving sustainable growth through comprehensive and integrated marketing strategies tailored to their needs and business objectives.</p>
              </section> 
            </div>
            <div class="goals-container">
            <div class="goals" onclick="showProject('goals3')">
              <section>
              <h3 class="arabic">  🎯 : ٣- انشاء وإدارةالحملات الإعلانية باحترافية  </h3>
            <h3 class="english hidden">3.Create and manage advertising campaigns professionally: 🎯 </h3>
            <img src="img/12.png" alt="goals3" width="348" height="175">
            <p class="arabic">.نركز على إدارة الحملات الإعلانية على مختلف المنصات بكفاءة لضمان وصول الرسالة الصحيحة إلى الجمهور المستهدف في الوقت المناسب</p>
            <p class="english hidden"> We focus on efficiently managing advertising campaigns across various platforms to ensure the right message reaches the target audience at the right time.</p>
              </section> 
            </div>
            <div class="goals-container">
            <div class="goals" onclick="showProject('goals4')">
              <section>
              <h3 class="arabic">  🛠️ : ٤- تطوير المشاريع بمرونة وفعالية  </h3>
            <h3 class="english hidden">4.Develop Projects with Flexibility and Efficiency: 🛠️</h3>
            <img src="img/17.png" alt="goals4" width="348" height="175">
            <p class="arabic">.نعمل على إدارة المشاريع التسويقية بمستوى عالٍ من الكفاءة مع مرونة في التنفيذ تضمن تحقيق الأهداف بأعلى جودة وفي الوقت المحدد</p>
            <p class="english hidden"> We ensure high-level project management with flexibility in execution, achieving goals with top quality and on time.</p>
              </section> 
            </div>
            <div class="goals-container">
            <div class="goals" onclick="showProject('goals5')">
              <section>
               <h3 class="arabic">  🤝 : ٥- بناء علاقات طويلة الأمد مع العملاء  </h3>
               <h3 class="english hidden">5.Build Long-term Client Relationships: 🤝 </h3>
               <img src="img/19.png" alt="goals5" width="348" height="175">
               <p class="arabic">.نسعى لخلق شراكات مستدامة مع عملائنا مبنية على الثقة والاحترافية لضمان تحقيق نجاح متبادل ومستمر</p>
               <p class="english hidden"> Our goal is to create sustainable partnerships with our clients, built on trust and professionalism, ensuring mutual and continuous success.!</p>
              </section> 
            </div>
        
    </section>

    <section id="contact">
        <h2 class="arabic">تواصل معنا</h2>
        <h2 class="english hidden">Contact Us</h2>
        <img src="img/26.png" alt="تواصل معنا" width="567" height="290">
        <p class="arabic"> info@goldenagency.com : البريد الإلكتروني </p>
        <p class="english hidden">Email : info@goldenagency.com</p>
        <p class="arabic">رقم الهاتف : 01142793583 / 01553831092</p>
        <p class="english hidden">Phone : 01142793583 / 01553831092</p>
        <p class="arabic">العنوان : القاهرة، أوتوستراد مايو</p>
        <p class="english hidden">Address : Cairo, Autostrad May</p>
    <a href="https://www.facebook.com/profile.php?id=61562612117623"> <img src="img/24.png" alt="face book" width="158" height="110" srcset=""></a><a href="https://www.instagram.com/g0ldenagency/"><img src="img/25.png" alt="insta" width="218" height="123" srcset=""></a></section>

    <footer>
      <p class="arabic">© 2024 GOLDEN AGENCY. جميع الحقوق محفوظة.</p>
        <p class="english hidden">© 2024 GOLDEN AGENCY. All Rights Reserved.</p>
    </footer>

    <script src="script.js"></script>

</body>
</html>
