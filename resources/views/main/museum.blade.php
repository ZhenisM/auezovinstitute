
@extends('layouts.app')

@section('content')
<div>
    <div class="history__way">
        <a href="{{ URL::to('/') }}">Главная</a>&nbsp;/
        <a href="{{ URL::to('/main/museum') }}">Музей</a>
    </div>
    <div class="container_1">

        <div class="social_and_banner">
            <div class="social-networks_1">
                <ul>
                    <li> <a href="https://www.google.ru/" target="_blank" class="google"><i class="fa fa-google-plus"></i></a> </li>
                    <li> <a href="https://www.vk.com/" target="_blank" class="vk"><i class="fa fa-vk"></i></a>            </li>
                    <li><a href="https://www.facebook.com/" target="_blank" class="facebook"><i class="fa fa-facebook"></i></a></li>
                    <li>  <a href="https://www.instagram.com/" target="_blank" class="inst"><i class="fa fa-instagram"></i></a> </li>
                </ul>
            </div>
            <div>
                <h1 style="margin-top:15px; font-size: 3em;">Институт литературы и искусства имени. М. О. Ауэзова</h1>
                <img src="../../images/Museum.png" alt="альтернативный текст">
                <div class="new__state__date">
                    <i class="far fa-calendar-alt"></i><p>&nbsp;&nbsp;12.02.2019&nbsp;&nbsp;&nbsp;&nbsp;</p><i class="far fa-eye"></i><p>&nbsp;&nbsp;1222</p>
                </div>
                <div class="history_content">

                    <div class="text_review">
                        <p class="desc">27 июня 1961 года ушел из жизни великий казахский писатель, лауреат Ленинской и Государственной премий,
                            крупный ученый и общественный деятель Мухтар Омарханович Ауэзов. По постановлению Совета Министров Казахской ССР №
                            10 от 15 августа 1961 года об увековечении памяти Мухтара Омархановича Ауэзова было принято решение об открытии его
                            музея. 28 ноября 1963 года литературно-мемориальный Дом-музей М.О.Ауэзова открыл свои двери для первых посетителей.
                            В этом доме по ул.М.Тулебаева, 185 М.О.Ауэзов прожил свои последние десять лет жизни с 1951 по 1961 год. </p>
                        <br>
                        <p class="desc">Этот дом и богатейший фонд, ставший основой экспозиции и включающий в себя рукописное наследие и личную
                            библиотеку, передала в дар Институту литературы и искусства супруга писателя – Валентина Николаевна Ауэзова. </p>
                        <br>
                        <p class="desc">Первая экспозиция музея просуществовала 10 лет до 1973 года. Автор – художник Н.П.Александров. Экспозиция
                            располагалась только на первом этаже дома. Единственной мемориальной комнатой был тогда рабочий кабинет Мухтара Омархановича.
                            В 1973 году была создана новая экспозиция (автор проекта – художник Я.Нимиц), которая привлекала внимание посетителей музея
                            двадцать лет. В экспозицию вошел и второй этаж дома. Была открыта вторая мемориальная комната – спальня, а затем и уголок интерьера
                            столовой комнаты. Для расширения второй экспозиции были построены дополнительные помещения, учитывая интересы научных сотрудников и
                            технических работников, а также кинозал. </p>
                        <br>
                        <p class="desc">За годы своего существования музей превратился в один из крупнейших очагов казахстанской и мировой культуры. Мемориальные
                            ценности «Дома Ауэзова» – рукописи, архивные материалы, фотографии, негативы, экспонаты, личные вещи, эпистолярное наследие, кино-видео,
                            аудио материалы являются национальным достоянием Казахстана и служат символом духовной культуры нации. </p>
                        <br>
                        <p class="desc">В экспозиции музея находятся прекрасные образцы изобразительного и прикладного искусства. Среди них – работы народного художника
                            СССР Е.Вучетича, портреты М.Ауэзова народных художников Казахстана А.Кастеева, К.Тельжанова, С.Мамбеева, Н.Нурмухамедова, графические иллюстрации
                            к роману «Путь Абая» Е.Сидоркина, а также эскизы костюмов и декораций к пьесам М.Ауэзова известных художников Г.Исмаиловой, А.Ненашева и Э.Чарномского. </p>
                        <br>
                        <p class="desc"Дочь писателя Лейля Мухтаровна Ауэзова (1929 – 1993) возглавила всю основную работу по созданию музея, которым руководила 30 лет вплоть до последних
                           дней жизни. Под руководством Л.М.Ауэзовой коллектив музея опубликовал большое количество книг по изучению творческого наследия М.О.Ауэзова. Она внесла огромный вклад
                           в дело исследования, собирания и опубликования многочисленных произведений М.О.Ауэзова.</p>
                        <br>
                        <p class="desc">«Дом Ауэзова» имеет совершенно оригинальный статус, что отличает его от других музеев и учреждений культуры. Он входит в состав Института литературы и
                            искусства им. М.О.Ауэзова. Его сотрудники, помимо большой культурно-просветительской работы, активно занимаются научно-исследовательскими изысканиями.</p>
                        <br>
                        <p class="desc">За 20 лет независимости он превратился в единственный мемориальный научно-культурный центр по ауэзоведению. Сотрудники «Дома Ауэзова» вот уже много лет
                            занимаются исследованием жизни и творчества писателя, собиранием и публикацией его многотомных произведений.</p>
                        <br>
                        <p class="desc">С 1964 по 2000 годы при Доме-музее активно функционировал Народный университет казахской литературы и искусства. Под руководством его ректора – известного
                            ученого Рахманкула Бердибаева (ученый секретарь Т.Акимов) было проведено более 500 занятий. Здесь читали лекции, делились своими мыслями крупные ученые, деятели культуры,
                            маститые писатели Алькей Маргулан, Габит Мусрепов, Габиден Мустафин, Ильяс Есенберлин, Абдижамил Нурпеисов, Серик Кирабаев, Зейнолла Кабдолов, Еркегали Рахмадиев и многие другие.
                            На занятиях велись дискуссии по вопросам развития казахского языка, изучения древнего наследия, возрождения полузабытых музыкальных, литературных фольклорных традиций казахского народа.</p>
                        <br>
                        <p class="desc">В 1997 году была подготовлена  и открыта к 100-летию М.О.Ауэзов. новая экспозиция музея (автор – художник Бердалы Кушербаев).  </p>
                        <br>
                        <p class="desc">1997 год был объявлен, по решению ЮНЕСКО, годом Мухтара Ауэзова и занесен в список мировых памятных дат. В связи с предстоящим столетним юбилеем писателя в 1994 году
                            Правительство Республики Казахстан приняло постановление о переименовании музея в Научно-культурный центр «Дом Ауэзова» и проведении реставрационных и строительных работ. Сложная
                            и кропотливая работа продолжалась четыре года. В результате была осуществлена полная реконструкция и реставрация музея, построены дополнительные помещения для архива и уникального рукописного фонда.</p>
                        <br>
                        <p class="desc">27 сентября 1997 года  Президентом Республики Казахстан Нурсултаном Абишевичем Назарбаевым  был открыт обновленный комплекс музея.  На открытии присутствовали Чингиз Айтматов, Давид Кугультинов,
                            Полад Бюль-Бюль оглы и многие деятели литературы и искусства, принимавшие участие в юбилейных мероприятиях в честь 100-летия М.О.Ауэзова.</p>
                        <br>
                        <p class="desc">Главное направление научно-исследовательской работы отдела-музея под руководством Д.Кунаева - собирание, изучение, публикация и пропаганда творческого наследия М.О.Ауэзова во взаимосвязи казахской и мировой
                            литератур. «Дом Ауэзова» на сегодня единственный мемориальный научно-культурный центр ауэзоведения. Его сотрудники вот уже много лет занимаются исследованием жизни и творчества писателя, собиранием и публикацией художественных произведений. </p>
                        <br>
                        <p class="desc">Впервые изданы энциклопедия «М.О.Ауэзов» и  полное академическое собрание сочинений М.О.Ауэзова в 50-ти томах (руководитель проекта Д.Кунаев). В новое собрание сочинений входит огромное количество архивных материалов, писем, неизвестных
                            рукописей, набросков, блокнотных записей, докладов, выступлений писателя и выдающегося общественного деятеля на различных форумах и в ходе многочисленных дискуссий. Публикуются тексты лекций, отзывы, рецензии. Таким образом, творческое и научное
                            наследие М.О.Ауэзова впервые представлено в максимальном объеме. </p>
                        <br>
                        <p class="desc">Адрес: ул. Тулебаева 185 (угол проспекта Абая )</p>
                        <br>
                        <ul>
                            <li>Тел.: 8 (727) 261 22 27</li>
                            <li>Выходные дни: Воскресенье и понедельник.</li>
                            <li>Раб. врем: 10.00 - 17.00.</li>
                            <li>Билет: для студентов и школьников - 50 т., взрослым - 100 т.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    jQuery(".text_review").each(function(){
        var review_full = jQuery(this).html();
        var review = review_full;
        if( review.length > 500 )
        {
            review = review.substring(0, 1850);
            jQuery(this).html( review + '<div class="read_more"> показать больше </div>' );
        }
        jQuery(this).append('<div class="full_text" style="display: none;">' + review_full + '</div>');
    });
    jQuery(".read_more").click(function(){
        jQuery(this).parent().html( jQuery(this).parent().find(".full_text").html() );
    });
</script>
@endsection