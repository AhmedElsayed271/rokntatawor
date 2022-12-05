<?php
    ob_start();
    $servie = "";
    if ($_GET['service']) {

        $service = $_GET['service'];


        include "init.php";

        if ($service == "azl-roof") { ?>

            <div class="service-details">
                <div class="container">
                    <h1>خدمات العزل الحراري والمائي</h1>
                    <p>توفر شركتنا خدمات العزل المائي والحرارى للمبانى والأسطح بأفضل مواد العزل ذات جودة عالمية بكافة انواعه حسب طبيعة كل مبنى،حيث لكل مبنى تشيدهُ شركتنا دون تمييز توفر لة خدمات العزل ،ومن وقت صدور أمر وزارة الشؤون البلدية والقروية.</p>
                </div>
            </div>

            <div class="photo-service">
                <div class="container">
                    <div class="row">
                        <div class='col-md-3 col-sm-6'><img src="layout/images/azl1.jpg" alt="..."></div>
                        <div class='col-md-3 col-sm-6'><img src="layout/images/roof2.jpg" alt="..."></div>
                        <div class='col-md-3 col-sm-6'><img src="layout/images/roof3.jpg" alt="..."></div>
                        <div class='col-md-3 col-sm-6'><img src="layout/images/khzan4.jpg" alt="..."></div>
                    </div>
                </div>
            </div>

        <?php } else if ($service == "bug") {

                ?>

                <div class="service-details">
                    <div class="container">
                        <h1>مكافحة الحشرات ورش المبيدات</h1>
                        <p>يعد برنامج شركة ركن التطور من أكثر البرامج المطبقة عالمياَ في مجال مكافحة حشرات ورش مبيدات بالمملكة لقتل الآفات و الحشرات الضارة، ولن تجده فى اى شركة توفر خدمات رش المبيدات ورش القواعد قبل نزول الخرسانة وتشبيع الارضيات بالمحلول بعد الدفان مباشرة.</p>
                    </div>
                </div>

            <div class="photo-service">
                <div class="container">
                    <div class="row">
                        <div class='col-md-3 col-sm-6'><img src="layout/images/bug1.jpg" alt="..."></div>
                        <div class='col-md-3 col-sm-6'><img src="layout/images/bug2.jpg" alt="..."></div>
                        <div class='col-md-3 col-sm-6'><img src="layout/images/bug3.jpg" alt="..."></div>
                    </div>
                </div>
            </div>

                <?php

        } else if ($service == "house") {

            ?>

            <div class="service-details">
                <div class="container">
                    <h1>ترميم وصيانة المنازل</h1>
                    <p>نوفر فى ركن التطور خدمات صيانة وترميم المنازل والمبانى مثل صيانة واصلاح السباكة والكهرباء ومنظومات الصرف الصحى ،ونقوم بأعمال الترميم وتجديد الديكورات ،لدينا قسم لخدمات الصيانة الطارئة البسيطة والمعقدة بكافة أنحاء المملكة العربية السعودية .</p>
                </div>
            </div>

            <div class="photo-service">
                <div class="container">
                    <div class="row">
                        <div class='col-md-3 col-sm-6'><img src="layout/images/house1.jpg" alt="..."></div>
                        <div class='col-md-3 col-sm-6'><img src="layout/images/house2.jpg" alt="..."></div>
                        <div class='col-md-3 col-sm-6'><img src="layout/images/house3.jpg" alt="..."></div>
                    </div>
                </div>
            </div>

            <?php

        } else if ($service == "phome") {

            ?>

            <div class="service-details">
                <div class="container">
                    <h1>عزل الفوم للأسطح</h1>
                    <p>منطقة جدة من أكثر المناطق التي تعاني من ارتفاع ملحوظ في درجات الحرارة ، وهذا ما يجعل السكان يقدمون على تشغيل التكيفات باستمرار وهذا يؤثر على ارتفاع كبير في فواتير الكهرباء ، لهذا تقدم شركتنا لجميع عملائها خدمة عزل الاسطح بجدة باستخدام أفضل مواد العزل المستوردة من الخارج بواسطة أمهر الفنيين المتخصصين في عزل الأسطح بأسعار في المتناول</p>
                </div>
            </div>

            <div class="photo-service">
                <div class="container">
                    <div class="row">
                        <div class='col-md-3 col-sm-6'><img src="layout/images/phome1.jpg" alt="..."></div>
                        <div class='col-md-3 col-sm-6'><img src="layout/images/phome2.jpg" alt="..."></div>
                        <div class='col-md-3 col-sm-6'><img src="layout/images/phome3.jpg" alt="..."></div>
                    </div>
                </div>
            </div>

            <?php


        } else if ($service == "clean") {

            ?>

            <div class="service-details">
                <div class="container">
                    <h1>تنظيف مبانى ومنازل</h1>
                    <p>نوفر خدمات للمنازل والمبانى الخدمية الخاصة والحكومية منها خدمة تنظيف المبانى السكنية والخدمية ،حيث نقوم بتنظيف المبانى بعد الترميم او التنظيف التقليدى ،لدينا قسم خاص بتنظيف منظومات التكييف الصغيرة الى التكيفات الفردية ،وغيرها من الخدمات ..</p>
                </div>
            </div>

            <div class="photo-service">
                <div class="container">
                    <div class="row">
                        <div class='col-md-3 col-sm-6'><img src="layout/images/clean1.jpg" alt="..."></div>
                        <div class='col-md-3 col-sm-6'><img src="layout/images/clean2.jpg" alt="..."></div>
                        <div class='col-md-3 col-sm-6'><img src="layout/images/clean3.jpg" alt="..."></div>
                    </div>
                </div>
            </div>

            <?php


        } else if ($service == "khzanat") {

            ?>

            <div class="service-details">
                <div class="container">
                    <h1>شركة عزل اسطح بجدة</h1>
                    <p>من أهم مكونات المنازل في جدة الخزانات بأنواعها سواء الأرضي أو العلوي ، وحدوث أي تسرب في الخزانات يؤثر بشكل مباشر على المنزل والسكان ، حيث يسبب ارتفاع في فواتير الكهرباء ، كما أنه يسبب بعض الأمراض بسبب البكتيريا والجراثيم ؛ لهذا تحتاج إلى شركة متخصصة للقيام بعزل خزانك باستخدام مواد ذات جودة عالية ولا تؤثر على صحة الإنسان ، وهذا ما توفره شركتنا ، فلهذا لا تتردد وتواصل معنا .</p>
                </div>
            </div>

            <div class="photo-service">
                <div class="container">
                    <div class="row">
                        <div class='col-md-3 col-sm-6'><img src="layout/images/khzan1.jpg" alt="..."></div>
                        <div class='col-md-3 col-sm-6'><img src="layout/images/khzan2.jpg" alt="..."></div>
                        <div class='col-md-3 col-sm-6'><img src="layout/images/khzan3.jpg" alt="..."></div>
                        <div class='col-md-3 col-sm-6'><img src="layout/images/khzan4.jpg" alt="..."></div>
                    </div>
                </div>
            </div>

            <?php

        } else if ($service == "tfsh") {

            ?>

            <div class="service-details">
                <div class="container">
                    <h1>عزل و تسليك غرف التفايش</h1>
                    <p>توفر ايضا خدمات عزل تسليك جميع غرف التفاتيش المكتومة وتنظيفها وترميمها بالمواد الإسمنتية العازله وعزلها ثلاث طبقات بالمواد الابوكسيه العازله</p>
                </div>
            </div>

            <div class="photo-service">
                <div class="container">
                    <div class="row">
                        <div class='col-md-3 col-sm-6'><img src="layout/images/tfsha1.webp" alt="..."></div>
                        <div class='col-md-3 col-sm-6'><img src="layout/images/tfatish.jpg" alt="..."></div>
                        <div class='col-md-3 col-sm-6'><img src="layout/images/tfatish1.jpg" alt="..."></div>
                        <div class='col-md-3 col-sm-6'><img src="layout/images/tfatish2.jpg" alt="..."></div>
                    </div>
                </div>
            </div>

            <?php

        } else if ($service == "decoration") {

            ?>

            <div class="service-details">
                <div class="container">
                    <h1>أعمال الديكورات و الشلالات</h1>
                    <p>عمل تركيب الشليهات بجميع اشكالها عمل تركيب الحجر والرخام عمل تركيب الإضاءات الكهربائية عمل تركيب العشب الأخضر بجميع الأشكال والديكورات</p>
                </div>
            </div>
            <div class="photo-service">
                <div class="container">
                    <div class="row">
                        <div class='col-md-3 col-sm-6'><img src="layout/images/tfsh1.jpg" alt="..."></div>
                        <div class='col-md-3 col-sm-6'><img src="layout/images/tfsh2.jpg" alt="..."></div>
                        <div class='col-md-3 col-sm-6'><img src="layout/images/tfsh3.jpg" alt="..."></div>
                    </div>
                </div>
            </div>
            

            <?php

        } else if ($service == "hmamat") {

            ?>

            <div class="service-details">
                <div class="container">
                    <h1> خدمات عزل وصيانة الحمامات</h1>
                    <p> معظم السكان يواجهون مشكلة تسربات المياه في الحمامات وخاصة في الأدوار العلوية التي تسبب تسربات المياه بها إلى الكثير من المشاكل في سقف المنزل مثل سقوط الدهان والجبس بورد ، وظهور العفن إذا لم يتم علاج المشكلة بسرعة ، ولهذا يبحث الكثير من العملاء عن شركة موثوقة لكشف التسربات ، ولا يوجد أفضل من شركة كشف تسربات المياه بجدة لحل هذه المشكلة . فبمجرد التواصل مع أفضل شركة كشف تسربات الحمامات بجدة يقوم الفريق بالتوجه إلى مكان العمل ومعه أفضل الأجهزة الإلكترونية التي يستخدمها في كشف التسربات دون تكسير ، حيث يقوم بالكشف على جميع خطوط المياه سواء الحارة أو الباردة الموجود داخل الجدران ، كما يقوم الفريق بالكشف عن الأرضيات والحنفيات ، والصفيات وتحديد المشاكل والفراغات الموجودة بها والتي تسبب تسربات المياه ، وبعد هذا يتم إخبار العميل بجميع المشاكل وترك الاختيار له في تحديد أولوية المشاكل التي يبدأ بعلاجها الفريق . كما تقدم شركتنا خدمة فحص كرسي الحمام بجدة حيث يكون كرسي الحمام أحد أهم أسباب تسربات المياه التي تحدث في الحمامات .</p>
                </div>
            </div>

            <div class="photo-service">
                <div class="container">
                    <div class="row">
                        <div class='col-md-3 col-sm-6'><img src="layout/images/hmamat1.jpg" alt="..."></div>
                        <div class='col-md-3 col-sm-6'><img src="layout/images/hmamat3.jpg" alt="..."></div>
                        <div class='col-md-3 col-sm-6'><img src="layout/images/hmamat4.jpg" alt="..."></div>
                    </div>
                </div>
            </div>

            <?php

        } else if ($service == "azl-water") {

          
            ?>

            <div class="service-details">
                <div class="container">
                    <h1>خدمات العزل الحراري والمائي</h1>
                    <p>توفر شركتنا خدمات العزل المائي والحرارى للمبانى والأسطح بأفضل مواد العزل ذات جودة عالمية بكافة انواعه حسب طبيعة كل مبنى،حيث لكل مبنى تشيدهُ شركتنا دون تمييز توفر لة خدمات العزل ،ومن وقت صدور أمر وزارة الشؤون البلدية والقروية.</p>
                </div>
            </div>

            
            <div class="photo-service">
                <div class="container">
                    <div class="row">
                        <div class='col-md-3 col-sm-6'><img src="layout/images/azl1.jpg" alt="..."></div>
                        <div class='col-md-3 col-sm-6'><img src="layout/images/azl2.jpg" alt="..."></div>
                        <div class='col-md-3 col-sm-6'><img src="layout/images/azl3.jpg" alt="..."></div>
                    </div>
                </div>
            </div>

            <?php  

        } else if ($service == "water-leakage") {

            
            ?>

            <div class="service-details">
                <div class="container">
                    <h1>كشف وصيانة تسربات المياه</h1>
                    <p>من الشركات الخليجية الوطنية المميزة التى تتبع سياسات مدروسة منذ انطلاقها فى عامها الاول عام 1427 هـ(2005)م وارتكزت تلك السياسات على الخبرة العملية والعلمية والواقعي المدروسة ،أسست بالاستثمارات الأمثل للطاقة البشرية وطاقم عملها والسعى دائماً وراء استقطاب أصحاب المؤهلات العليا ادارياً وهندسيا ، الذين أسهموا بشكل فاعل في تحقيق تلك الاستراتيجية الكاملة للشركة لذلك انعكس علينا الأمر بوضوح من اعمالنا</p>

                </div>
            </div>

            <div class="photo-service">
                <div class="container">
                    <div class="row">
                        <div class='col-md-3 col-sm-6'><img src="layout/images/water1.jpg" alt="..."></div>
                        <div class='col-md-3 col-sm-6'><img src="layout/images/water2.jpg" alt="..."></div>
                        <div class='col-md-3 col-sm-6'><img src="layout/images/water3.jpg" alt="..."></div>
                    </div>
                </div>
            </div>

            <?php


        } else if ($service == "msalah") {

            
            ?>

            <div class="service-details">
                <div class="container">
                    <h1>خدمات صيانة وتنظيف المسالح</h1>
                    <p>   ا وجود المسابح في الفلل أو القصور من أفضل أدوات الديكور التي توفر الرفاهية والجمال لأصحاب المكان ، ولكن يجب الاعتناء بهذه المسابح بشكل مستمر لتأكد من سلامتها ؛ لأن مشاكل تسربات المياه في المسابح من أخطر الأمور التي لا تقتصر فقط على صحة الإنسان بل تمتد إلى أساس المكان المحيط بالمسح ، وقد تسبب انهيار أجزاء من المكان على المدى البعيد ، فلهذا تقدم شركة كشف تسربات المياه بجدة أفضل الخدمات لحل مشكلات تسربات المسابح ، حيث يتبع الفريق عدة خطوات لحل الأمر ، وهذه الخطوات تتمثل في الآتي : ه في البداية يتم تفريغ محتوى المسبح بالكامل ، وإغلاق جميع موصلات المياه من مواسير ومضخات ومواتير المياه . ويقوم متخصص بالكشف على جميع المضخات والتأكد من سلامتها وفي حالة وجود مشاكل يقوم بصيانتها . ثم يقوم الفني باستخدام جهاز كشف التسربات بواسطة تمريره </p>
            </div>

            <div class="photo-service">
                <div class="container">
                    <div class="row">
                        <div class='col-md-3 col-sm-6'><img src="layout/images/msaph1.jpg" alt="..."></div>
                        <div class='col-md-3 col-sm-6'><img src="layout/images/mspah4.jpg" alt="..."></div>
                        <div class='col-md-3 col-sm-6'><img src="layout/images/mspah5.jpg" alt="..."></div>
                        <div class='col-md-3 col-sm-6'><img src="layout/images/mspah7.jpg" alt="..."></div>
                    </div>
                </div>
            </div>

            <?php


        } else if ($service == "azl-water-roof") {

            ?>

            <div class="service-details">
                <div class="container">
                    <h1>خدمات العزل المائي للأسطح</h1>
                    <p>تنظيف الأسطح جيدا من الشوائب والأتربة ترميم جميع فواصل والزوايا واي تنسيم للخرسانة آو السيراميك بمادة الربدو الإيطالي وتغليف السطوح كامل ثلاث أوجه بالمواد العازله المانعة للتسريب والمانعة لاشعة الشمس</p>
                </div>
            </div>

            <div class="photo-service">
                <div class="container">
                    <div class="row">
                        <div class='col-md-3 col-sm-6'><img src="layout/images/roof1.jpg" alt="..."></div>
                        <div class='col-md-3 col-sm-6'><img src="layout/images/roof2.jpg" alt="..."></div>
                        <div class='col-md-3 col-sm-6'><img src="layout/images/roof3.jpg" alt="..."></div>
                        <div class='col-md-3 col-sm-6'><img src="layout/images/roof4.jpg" alt="..."></div>
                    </div>
                </div>
            </div>
        <?php


        } else {
            header("location: index.php");
        }   

        include $tpl . "footer.php";




    } else {
        header("location: index.php");
    }
    ob_end_flush();