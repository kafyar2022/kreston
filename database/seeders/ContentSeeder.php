<?php

namespace Database\Seeders;

use App\Models\Content;
use Illuminate\Database\Seeder;

class ContentSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $contents = array(
      array('id' => '1', 'locale' => 'ru', 'slug' => 'main-page-about-ru', 'page' => 'main', 'content' => '<h2>О KRESTON AC<br></h2><p>KRESTON AC LLC — это профессиональная компания с полным спектром услуг, которая стремится предоставлять выдающиеся налоговые, финансовые, деловые и юридические консультационные услуги государственным и частным компаниям, иностранным дочерним компаниям, семейным предприятиям и частным лицам.</p><p><a href="/about" target="_self">Подробнее</a></p>', 'created_at' => '2022-08-02 10:25:20', 'updated_at' => '2022-08-02 10:25:20'),
      array('id' => '2', 'locale' => 'ru', 'slug' => 'main-page-experience-ru', 'page' => 'main', 'content' => '<h2>Наш опыт<br></h2><p>За годы работы KRESTON АС приобрела успешный опыт сотрудничества с различными компаниями и организациями и на сегодняшний день занимает прочные позиции на рынке, реализуя всевозможные проекты.</p><p><a href="/experience" target="_self">Подробнее</a></p>', 'created_at' => '2022-08-02 10:25:20', 'updated_at' => '2022-08-02 10:25:20'),
      array('id' => '3', 'locale' => 'ru', 'slug' => 'company-in-numbers-ru', 'page' => NULL, 'content' => '<h2>Компания в цифрах<br></h2><p>Предоставление профессиональных аудиторских услуг на высоком уровне с учетом</p><p>потребностей рынка и ориентацией на нужды и предпочтения клиентов.</p>', 'created_at' => '2022-08-02 10:25:20', 'updated_at' => '2022-08-02 10:25:20'),
      array('id' => '4', 'locale' => 'ru', 'slug' => 'main-page-advantage-ru', 'page' => 'main', 'content' => '<h2>Преимущества которые мы предоставляем:</h2><ul><li>Уникальность и надежность<br></li><li>Индивидуальный подход<br></li><li>Качество</li><li>Местные знания и мировой опыт<br></li><li>Персональное обслуживание<br></li><li>Лояльность клиентов<br></li><li>Набор дополнительных услуг<br></li></ul>', 'created_at' => '2022-08-02 10:25:20', 'updated_at' => '2022-08-02 10:25:20'),
      array('id' => '5', 'locale' => 'ru', 'slug' => 'our-partners-ru', 'page' => NULL, 'content' => '<h2>Нам доверяют<br></h2><p>Множество компаний со всего Таджикистана и за ее пределами</p><p>являются нашими клиентами на протяжении многих лет.</p>', 'created_at' => '2022-08-02 10:25:20', 'updated_at' => '2022-08-02 10:25:20'),
      array('id' => '6', 'locale' => 'ru', 'slug' => 'main-page-news-ru', 'page' => 'main', 'content' => '<h2>Наши новости<br></h2><p>Актуальные новости касающиеся</p><p>нашей деятельности</p>', 'created_at' => '2022-08-02 10:25:20', 'updated_at' => '2022-08-02 10:25:20'),
      array('id' => '7', 'locale' => 'ru', 'slug' => 'about-page-content-ru', 'page' => 'about', 'content' => '<h2>О нашей компании<br></h2><p>KRESTON AC LLC — это профессиональная компания с полным спектром услуг, которая стремится предоставлять выдающиеся налоговые, финансовые, деловые и юридические консультационные услуги государственным и частным компаниям, иностранным дочерним компаниям, семейным предприятиям и частным лицам.</p><p><br></p><p>Фирма была основана с целью повышения прибыльности малого и среднего бизнеса в Таджикистане при минимизации затрат на соблюдение требований и налогообложения.</p><p><br></p><p>KRESTON AC сочетает в себе глубокий практический опыт в области налогообложения,&nbsp;</p><p>бизнеса, финансов и права в Таджикистане с поддержкой одной из крупнейших в мире бухгалтерских сетей – Kreston International, чтобы помочь клиентам воспользоваться возможностями, которые приумножают их доход.</p>', 'created_at' => '2022-08-02 10:25:20', 'updated_at' => '2022-08-02 10:25:20'),
      array('id' => '8', 'locale' => 'ru', 'slug' => 'about-page-mission-ru', 'page' => 'about', 'content' => '<h2>Наша&nbsp;</h2><h2>миссия</h2><p>Предоставление профессиональных аудиторских услуг на высоком уровне с учетом потребностей рынка и ориентацией на нужды и предпочтения клиентов.<br></p>', 'created_at' => '2022-08-02 10:25:20', 'updated_at' => '2022-08-02 10:25:20'),
      array('id' => '9', 'locale' => 'ru', 'slug' => 'about-page-forum-ru', 'page' => 'about', 'content' => '<h2>Forum Of Firms<br></h2><p>Kreston International является полноправным членом Форума Компаний. Это ассоциация международных аудиторских сетей, целью которой является продвижение последовательных и высококачественных стандартов финансовой отчетности и практики аудита во всем мире.</p><p><a href="https://www.ifac.org/who-we-are/committees/transnational-auditors-committee-forum-firms" target="_blank">Подробнее</a></p>', 'created_at' => '2022-08-02 10:25:20', 'updated_at' => '2022-08-02 10:25:20'),
      array('id' => '10', 'locale' => 'ru', 'slug' => 'about-page-meta-ru', 'page' => 'about', 'content' => '<h2>Юридическая структура</h2><h2>и отказ от отвественности</h2><p>ООО «KRESTON AC» зарегистрировано в соответствии с законодательством Республики Таджикистан и является фирмой-членом Kreston International. Kreston International — это глобальная сеть аудиторских фирм, каждая из которых является отдельным и независимым юридическим лицом и, как таковая, не несет ответственности за действия или бездействие какой-либо другой фирмы-члена. Kreston International Limited — компания, зарегистрированная в Англии (№: 3453194) с ограниченной ответственностью.<br></p>', 'created_at' => '2022-08-02 10:25:20', 'updated_at' => '2022-08-02 10:25:20'),
      array('id' => '11', 'locale' => 'ru', 'slug' => 'advantage-page-advantages-ru', 'page' => 'about.advantage', 'content' => '<h2>Преимущества которые мы</h2><h2>предоставляем:</h2><ul><li>Уникальность и надежность</li><li>Индивидуальный подход</li><li>Качество</li><li>Местные знания и мировой опыт</li><li>Персональное обслуживание</li><li>Лояльность клиентов</li><li>Набор дополнительных услуг</li></ul>', 'created_at' => '2022-08-02 10:25:20', 'updated_at' => '2022-08-02 10:25:20'),
      array('id' => '12', 'locale' => 'ru', 'slug' => 'advantage-page-warranty-ru', 'page' => 'about.advantage', 'content' => '<h2>Что мы гарантируем</h2><h2>клиентам:</h2><ul><li>Практическое участие партнера</li><li>Преемственность персонала во всех заданиях</li><li>Целенаправленный, гибкий и реалистичный подход к решению проблем</li><li>Уважаемая репутация на местном и международном рынках</li><li>Полный сервисный подход к вашим потребностям.</li></ul>', 'created_at' => '2022-08-02 10:25:20', 'updated_at' => '2022-08-02 10:25:20'),
      array('id' => '13', 'locale' => 'ru', 'slug' => 'advantage-page-content-left-ru', 'page' => 'about.advantage', 'content' => '<h2>Мы нацелены на</h2><h2>Ваш результат</h2><p>Независимо от того, работаем ли мы с государственной или частной компанией, семейным бизнесом, стартапом или частным лицом, KRESTON AC предлагает клиентам использовать свой опыт.<br></p>', 'created_at' => '2022-08-02 10:25:20', 'updated_at' => '2022-08-02 10:25:20'),
      array('id' => '14', 'locale' => 'ru', 'slug' => 'advantage-page-content-right-ru', 'page' => 'about.advantage', 'content' => '<p><br></p><p><br></p><p><br></p><p>Благодаря глубоким знаниям, опыту и нововведениям наших сотрудников, мы стремимся предоставлять услуги высокого качества. Связь с нашей стороны будет поддерживаться на уровне партнера и менеджера. Это будет гарантировать решение ваших вопросов своевременно и соответствии с вашими ожиданиями.<br></p>', 'created_at' => '2022-08-02 10:25:20', 'updated_at' => '2022-08-02 10:25:20'),
      array('id' => '15', 'locale' => 'ru', 'slug' => 'team-page-content-ru', 'page' => 'about.team', 'content' => '<h2>Наша команда<br></h2><p>Являясь преуспевающей и нацеленной на успех компанией, мы объединяем энергичных и творческих людей, занимающихся любимым делом. Наша команда состоит из профессионалов и количество сотрудников постоянно увеличивается.</p><p><br></p><p>Наши консультанты имеют опыт работы в коммерческом и государственном секторах. Являясь одними из лучших в различных профессиональных ассоциациях и рабочих группах, наша команда постоянно совершенствует свою практику. Наш опыт работы в динамичной и гибкой бизнес-среде гарантирует нашим клиентам защиту их бизнеса, активов и финансовых инструментов.</p>', 'created_at' => '2022-08-02 10:25:20', 'updated_at' => '2022-08-02 10:25:20'),
      array('id' => '16', 'locale' => 'ru', 'slug' => 'team-page-target-ru', 'page' => 'about.team', 'content' => '<h2>Нацеленная на</h2><h2>успех команда</h2><p>Наша команда состоит из профессионалов, обладающих большим опытом работы, владеющих сильными техническими навыками и выдающимся послужным списком по предоставлению наших услуг.<br></p>', 'created_at' => '2022-08-02 10:25:20', 'updated_at' => '2022-08-02 10:25:20'),
      array('id' => '17', 'locale' => 'ru', 'slug' => 'team-page-specialists-ru', 'page' => 'about.team', 'content' => '<p>Наши ключевые</p><p>специалисты:</p>', 'created_at' => '2022-08-02 10:25:20', 'updated_at' => '2022-08-02 10:25:20'),
      array('id' => '18', 'locale' => 'ru', 'slug' => 'team-page-meta-ru', 'page' => 'about.team', 'content' => '<h2>Специалисты нашей компании</h2><h2>имеют следующие степени:</h2><ul><li>Сертифицированный аудитор</li><li>Сертифицированный бухгалтер-практик (CAP)</li><li>Сертифицированный международный профессиональный бухгалтер (CIPA)</li><li>Сертифицированный налоговый консультант</li></ul>', 'created_at' => '2022-08-02 10:25:20', 'updated_at' => '2022-08-02 10:25:20'),
      array('id' => '19', 'locale' => 'ru', 'slug' => 'news-page-content-ru', 'page' => 'news', 'content' => '<h2>Наши новости</h2><p>Актуальные новости касающиеся</p><p>нашей деятельности</p>', 'created_at' => '2022-08-02 10:25:20', 'updated_at' => '2022-08-02 10:25:20'),
      array('id' => '20', 'locale' => 'ru', 'slug' => 'experience-page-content-ru', 'page' => 'experience', 'content' => '<h2>Наш опыт<br></h2><p>За годы работы KRESTON АС приобрела успешный опыт сотрудничества с</p><p>различными компаниями и организациями и на сегодняшний день занимает</p><p>прочные позиции на рынке, реализуя всевозможные проекты.<br></p>', 'created_at' => '2022-08-02 10:25:20', 'updated_at' => '2022-08-02 10:25:20'),
      array('id' => '21', 'locale' => 'ru', 'slug' => 'industry-experience-top-ru', 'page' => 'experience', 'content' => '<h2>Отрослевой опыт<br></h2><p>Нашими клиентами являются ведущие компании</p><p>в следующих отраслях промышленности:<br></p>', 'created_at' => '2022-08-02 10:25:20', 'updated_at' => '2022-08-02 10:25:20'),
      array('id' => '22', 'locale' => 'ru', 'slug' => 'industry-experience-left-ru', 'page' => 'experience', 'content' => '<ul><li>Промышленное производство</li><li>Строительство</li><li>Телекоммуникации</li><li>Торговля</li><li>Энергетика</li></ul>', 'created_at' => '2022-08-02 10:25:20', 'updated_at' => '2022-08-02 10:25:20'),
      array('id' => '23', 'locale' => 'ru', 'slug' => 'industry-experience-right-ru', 'page' => 'experience', 'content' => '<ul><li>Агропромышленный сектор</li><li>Банковское дело и финансы</li><li>Авиакомпании</li><li>Горнодобывающая промышленность, нефть и газ</li><li>Гостиницы</li></ul>', 'created_at' => '2022-08-02 10:25:20', 'updated_at' => '2022-08-02 10:25:20'),
      array('id' => '24', 'locale' => 'ru', 'slug' => 'regulations-page-content-ru', 'page' => 'regulations', 'content' => '<h2>Нормативные документы<br></h2><p>Donec in ex dictum ante sagittis iaculis id in quam. Maecenas ac aliquam lorem, sed consectetur</p><p>diam. Cras blandit vulputate justo, sit amet posuere ex fermentum in. Nam rutrum libero</p><p>malesuada diam pretium, vitae pharetra magna laoreet. Sed lobortis convallis eros ac tempus.</p><p>Vivamus efficitur nisl eget sem accumsan, ut laoreet libero molestie. Quisque imperdiet sapien et</p><p>ante dapibus elementum pharetra a nisi. Ut tempus ut felis eget consequat. In vel viverra enim.<br></p>', 'created_at' => '2022-08-02 10:25:20', 'updated_at' => '2022-08-02 10:25:20'),
      array('id' => '25', 'locale' => 'ru', 'slug' => 'about-page-certificate-ru', 'page' => 'about', 'content' => '<p>Наши лиценцзии и</p><p>аккредитации:</p>', 'created_at' => '2022-08-02 10:25:20', 'updated_at' => '2022-08-02 10:25:20'),
      array('id' => '26', 'locale' => 'ru', 'slug' => 'contacts-page-content-ru', 'page' => 'contacts', 'content' => '<h2>Контакты<br></h2><p>Вы можете с нами связаться по телефону или электронной</p><p>почте, а также рады будем вас приветствовать в нашем офисе за</p><p>чашечкой чая или кофе.<br></p>', 'created_at' => '2022-08-02 10:25:20', 'updated_at' => '2022-08-02 10:25:20'),
      array('id' => '27', 'locale' => 'ru', 'slug' => 'contacts-page-footer-ru', 'page' => 'contacts', 'content' => '<p>ООО “КРЕСТОН АС”</p><p>Республика Таджикистан, 734025,</p><p>г. Душанбе, ул. Пушкина, 10, офис 207.</p>', 'created_at' => '2022-08-02 10:25:20', 'updated_at' => '2022-08-02 10:25:20'),
      array('id' => '28', 'locale' => 'ru', 'slug' => 'carrier-page-ru', 'page' => 'carrier', 'content' => '<h1>Lorem ipsum</h1><p>Donec in ex dictum ante sagittis iaculis id in quam. Maecenas ac aliquam lorem, sed consectetur</p><p>diam. Cras blandit vulputate justo, sit amet posuere ex fermentum in. Nam rutrum libero</p><p>malesuada diam pretium, vitae pharetra magna laoreet. Sed lobortis convallis eros ac tempus.</p><p>Vivamus efficitur nisl eget sem accumsan, ut laoreet libero molestie. Quisque imperdiet sapien et</p><p>ante dapibus elementum pharetra a nisi. Ut tempus ut felis eget consequat. In vel viverra enim.</p>', 'created_at' => '2022-08-02 10:25:20', 'updated_at' => '2022-08-02 10:25:53'),
      array('id' => '29', 'locale' => 'ru', 'slug' => 'carrier-page-vacancy-ru', 'page' => 'carrier', 'content' => '<p>Donec in ex dictum ante sagittis iaculis id in quam. Maecenas ac aliquam lorem, sed consectetur</p><p>diam. Cras blandit vulputate justo, sit amet posuere ex fermentum in. Nam rutrum libero</p><p>malesuada diam pretium, vitae pharetra magna laoreet. Sed lobortis convallis eros ac tempus.</p><p>Vivamus efficitur nisl eget sem accumsan, ut laoreet libero molestie. Quisque imperdiet sapien et</p><p>ante dapibus elementum pharetra a nisi. Ut tempus ut felis eget consequat. In vel viverra enim.</p>', 'created_at' => '2022-08-02 10:25:20', 'updated_at' => '2022-08-02 10:26:07')
    );

    foreach ($contents as $content) {
      Content::create([
        'locale' => $content['locale'],
        'slug' => $content['slug'],
        'page' => $content['page'],
        'content' => $content['content'],
      ]);

      Content::create([
        'locale' => 'en',
        'slug' => substr($content['slug'], 0, -2) . 'en',
        'page' => $content['page'],
        'content' => $content['content'],
      ]);
    }
  }
}
