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
    $contents = [
      [
        'slug' => 'main-page-about',
        'page' => 'main',
        'content' => '<h2>O Kreston AC</h2><p>KRESTON AC LLC — это профессиональная компания с полным спектром услуг, которая стремится предоставлять выдающиеся налоговые, финансовые, деловые и юридические консультационные услуги государственным и частным компаниям, иностранным дочерним компаниям, семейным предприятиям и частным лицам.</p><a href="#">Подробнее</a>',
      ],
      [
        'slug' => 'main-page-experience',
        'page' => 'main',
        'content' => '<h2>Наш опыт</h2><p>За годы работы KRESTON АС приобрела успешный опыт сотрудничества с различными компаниями и организациями и на сегодняшний день занимает прочные позиции на рынке, реализуя всевозможные проекты.</p><a href="#">Подробнее</a>',
      ],
      [
        'slug' => 'company-in-numbers',
        'page' => null,
        'content' => '<h2>Компания в цифрах</h2><p>Предоставление профессиональных аудиторских услуг на высоком уровне с учетом<br>потребностей рынка и ориентацией на нужды и предпочтения клиентов.</p>',
      ],
      [
        'slug' => 'main-page-advantage',
        'page' => 'main',
        'content' => '<h2>Преимущества которые мы <br> предоставляем:</h2><ul><li>Уникальность и надежность</li><li>Индивидуальный подход</li><li>Качество</li><li>Местные знания и мировой опыт</li><li>Персональное обслуживание</li><li>Лояльность клиентов</li><li>Набор дополнительных услуг</li></ul><a href="#">Подробнее</a>',
      ],
      [
        'slug' => 'our-partners',
        'page' => null,
        'content' => '<h2>Нам доверяют</h2><p>Множество компаний со всего Таджикистана и за ее пределами <br> являются нашими клиентами на протяжении многих лет.</p>',
      ],
      [
        'slug' => 'main-page-news',
        'page' => 'main',
        'content' => '<h2>Наши новости</h2><p>Актуальные новости касающиеся <br> нашей деятельности <a href="#">Все новости</a></p>',
      ],
      [
        'slug' => 'about-page-content',
        'page' => 'about',
        'content' => '<h1>О нашей компании</h1><p>KRESTON AC LLC — это профессиональная компания с полным спектром услуг, которая стремится предоставлять выдающиеся налоговые, финансовые, деловые и юридические консультационные услуги государственным и частным компаниям, иностранным дочерним компаниям, семейным предприятиям и частным лицам.</p><p>Фирма была основана с целью повышения прибыльности малого и среднего бизнеса в Таджикистане при минимизации затрат на соблюдение требований и налогообложения.</p><p>KRESTON AC сочетает в себе глубокий практический опыт в области налогообложения, бизнеса, финансов и права в Таджикистане с поддержкой одной из крупнейших в мире бухгалтерских сетей – Kreston International, чтобы помочь клиентам воспользоваться возможностями, которые приумножают их доход.</p>',
      ],
      [
        'slug' => 'about-page-mission',
        'page' => 'about',
        'content' => '<h2>Наша <br> миссия</h2><p>Предоставление профессиональных аудиторских услуг на высоком уровне с учетом потребностей рынка и ориентацией на нужды и предпочтения клиентов.</p>',
      ],
      [
        'slug' => 'about-page-forum',
        'page' => 'about',
        'content' => '<h2>Forum Of Firms</h2><p>Kreston International является полноправным членом Форума Компаний. Это ассоциация международных аудиторских сетей, целью которой является продвижение последовательных и высококачественных стандартов финансовой отчетности и практики аудита во всем мире.</p><a href="#">Подробнее</a>',
      ],
      [
        'slug' => 'about-page-meta',
        'page' => 'about',
        'content' => '<h2>Юридическая структура <br> и отказ от отвественности</h2><p>ООО «KRESTON AC» зарегистрировано в соответствии с законодательством Республики Таджикистан и является фирмой-членом Kreston International. Kreston International — это глобальная сеть аудиторских фирм, каждая из которых является отдельным и независимым юридическим лицом и, как таковая, не несет ответственности за действия или бездействие какой-либо другой фирмы-члена. Kreston International Limited — компания, зарегистрированная в Англии (№: 3453194) с ограниченной ответственностью.</p>',
      ],
      [
        'slug' => 'advantage-page-advantages',
        'page' => 'about.advantage',
        'content' => '<h2>Преимущества которые мы <br> предоставляем:</h2><ul><li>Уникальность и надежность</li><li>Индивидуальный подход</li><li>Качество</li><li>Местные знания и мировой опыт</li><li>Персональное обслуживание</li><li>Лояльность клиентов</li><li>Набор дополнительных услуг</li></ul>',
      ],
      [
        'slug' => 'advantage-page-warranty',
        'page' => 'about.advantage',
        'content' => '<h2>Что мы гарантируем <br> клиентам:</h2><ul><li>Практическое участие партнера</li><li>Преемственность персонала во всех заданиях</li><li>Целенаправленный, гибкий и реалистичный подход к решению проблем</li><li>Уважаемая репутация на местном и международном рынках</li><li>Полный сервисный подход к вашим потребностям</li></ul>',
      ],
      [
        'slug' => 'advantage-page-content',
        'page' => 'about.advantage',
        'content' => '<h2>Мы нацелены на <br> ваш результат</h2><p>Независимо от того, работаем ли мы с государственной или частной компанией, семейным бизнесом, стартапом или частным лицом, KRESTON AC предлагает клиентам использовать свой опыт.</p><br><br><br><p>Благодаря глубоким знаниям, опыту и нововведениям наших сотрудников, мы стремимся предоставлять услуги высокого качества. Связь с нашей стороны будет поддерживаться на уровне партнера и менеджера. Это будет гарантировать решение ваших вопросов своевременно и соответствии с вашими ожиданиями.</p>',
      ],
      [
        'slug' => 'team-page-content',
        'page' => 'about.team',
        'content' => '<h1>Наша команда</h1><p>Являясь преуспевающей и нацеленной на успех компанией, мы объединяем энергичных и творческих людей, занимающихся любимым делом. Наша команда состоит из профессионалов и количество сотрудников постоянно увеличивается.</p><p>Наши консультанты имеют опыт работы в коммерческом и государственном секторах. Являясь одними из лучших в различных профессиональных ассоциациях и рабочих группах, наша команда постоянно совершенствует свою практику. Наш опыт работы в динамичной и гибкой бизнес-среде гарантирует нашим клиентам защиту их бизнеса, активов и финансовых инструментов.</p>',
      ],
      [
        'slug' => 'team-page-target',
        'page' => 'about.team',
        'content' => '<h2>Нацеленная на <br> успех команда</h2><p>Наша команда состоит из профессионалов, обладающих большим опытом работы, владеющих сильными техническими навыками и выдающимся послужным списком по предоставлению наших услуг.</p>',
      ],
      [
        'slug' => 'team-page-specialists',
        'page' => 'about.team',
        'content' => '<h2>Наши ключевые <br> специалисты:</h2>',
      ],
      [
        'slug' => 'team-page-meta',
        'page' => 'about.team',
        'content' => '<h2>Специалисты нашей компании <br> имеют следующие степени:</h2><ul><li>Сертифицированный аудитор</li><li>Сертифицированный бухгалтер-практик (CAP)</li><li>Сертифицированный международный профессиональный бухгалтер (CIPA)</li><li>Сертифицированный налоговый консультант</li></ul>',
      ],
      [
        'slug' => 'news-page-content',
        'page' => 'news',
        'content' => '<h1>Наши новости</h1><p>Актуальные новости касающиеся <br> нашей деятельности</p>',
      ],
      [
        'slug' => 'experience-page-content',
        'page' => 'experience',
        'content' => '<h1>Наш опыт</h1><p>За годы работы KRESTON АС приобрела успешный опыт сотрудничества с <br> различными компаниями и организациями и на сегодняшний день занимает <br> прочные позиции на рынке, реализуя всевозможные проекты.</p>',
      ],
      [
        'slug' => 'industry-experience-top',
        'page' => 'experience',
        'content' => '<h2>Отрослевой опыт</h2><p>Нашими клиентами являются ведущие компании <br> в следующих отраслях промышленности:</p>',
      ],
      [
        'slug' => 'industry-experience-left',
        'page' => 'experience',
        'content' => '<ul><li>Промышленное производство</li><li>Строительство</li><li>Телекоммуникации</li><li>Торговля</li><li>Энергетика</li></ul>',
      ],
      [
        'slug' => 'industry-experience-right',
        'page' => 'experience',
        'content' => '<ul><li>Агропромышленный сектор</li><li>Банковское дело и финансы</li><li>Авиакомпании</li><li>Горнодобывающая промышленность, нефть и газ</li><li>Гостиницы</li></ul>',
      ],
      [
        'slug' => 'regulations-page-content',
        'page' => 'regulations',
        'content' => '<h1>Нормотивные документы</h1><p>Donec in ex dictum ante sagittis iaculis id in quam. Maecenas ac aliquam lorem, sed consectetur <br> diam. Cras blandit vulputate justo, sit amet posuere ex fermentum in. Nam rutrum libero <br> malesuada diam pretium, vitae pharetra magna laoreet. Sed lobortis convallis eros ac tempus. <br> Vivamus efficitur nisl eget sem accumsan, ut laoreet libero molestie. Quisque imperdiet sapien et <br> ante dapibus elementum pharetra a nisi. Ut tempus ut felis eget consequat. In vel viverra enim.</p>',
      ],
      [
        'slug' => '',
        'page' => '',
        'content' => '',
      ],
    ];

    foreach ($contents as $content) {
      Content::create([
        'locale' => 'ru',
        'slug' => $content['slug'] . '-ru',
        'page' => $content['page'],
        'content' => $content['content'],
      ]);

      Content::create([
        'locale' => 'en',
        'slug' => $content['slug'] . '-en',
        'page' => $content['page'],
        'content' => $content['content'],
      ]);
    }
  }
}
