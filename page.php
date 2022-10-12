<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header(); ?>
    <div class="main-container container" id="main-container">

<!-- Content -->
<div class="row">
      
  <!-- post content -->
  <div class="col-lg-8 blog__content mb-72">
    <div class="content-box">           

      <!-- standard post -->
      <article class="entry mb-0">
        
        <div class="single-post__entry-header entry__header">
          <h1 class="single-post__entry-title">
            <?php the_title(); ?>
          </h1>
        </div> <!-- end entry header -->

        <div class="entry__img-holder">
          <img src="img/content/single/single_post_featured_img.jpg" alt="" class="entry__img">
        </div>

        <div class="entry__article-wrap">

          <!-- Share -->
          <div class="entry__share">
            <div class="sticky-col">
              <div class="socials socials--rounded socials--large">
                <a class="social social-facebook" href="#" title="facebook" target="_blank" aria-label="facebook">
                  <i class="ui-facebook"></i>
                </a>
                <a class="social social-twitter" href="#" title="twitter" target="_blank" aria-label="twitter">
                  <i class="ui-twitter"></i>
                </a>
                <a class="social social-google-plus" href="#" title="google" target="_blank" aria-label="google">
                  <i class="ui-google"></i>
                </a>
                <a class="social social-pinterest" href="#" title="pinterest" target="_blank" aria-label="pinterest">
                  <i class="ui-pinterest"></i>
                </a>
              </div>
            </div>                  
          </div> <!-- share -->

          <div class="entry__article">

            <?php the_content(); ?>

          </div> <!-- end entry article -->
        </div> <!-- end entry article wrap -->
        
        <!-- Этапы заказа -->
        <section class="section section-posts mt-40 mb-0">
          <div class="content-second">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/img-etaps.png" alt="">
          </div>
        </section>

        <!-- Цифровой блок -->
        <section class="section section-number mt-40 mb-0" style="background: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/img/content-number-bg.jpg); background-repeat: no-repeat;">
          <div class="content-number" >
            <div class="content-number-title">На сегодняшний день было продано 2568 дипломов</div>
            <div class="content-number-subtitle">Среди них:</div>
            <div class="content-number-container">
              <div class="content-number-item">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/icon-student-1.png" alt="">
                <p><span>1079</span>дипломов бакалавра</p>
              </div>
              <div class="content-number-item">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/icon-student-2.png" alt="">
                <p><span>568</span>дипломов магистра</p>
              </div>
              <div class="content-number-item">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/icon-student-3.png" alt="">
                <p><span>586</span>аттестатов</p>
              </div>
              <div class="content-number-item">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/icon-student-4.png" alt="">
                <p><span>523</span>других документов</p>
              </div>
            </div>
          </div>
        </section>
        
        <!-- Вопросы ответы -->
        <section class="section section-posts mt-40 mb-0">
          <div class="title-wrap title-wrap--line title-wrap--pr">
            <h3 class="section-title">Вопросы и ответы</h3>
          </div>
          <div class="entry__article">            
            <p>На этой странице вы сможете увидеть ответы на самые распространённые вопросы, которые касаются изготовления документов в нашей компании</p>
            <p><strong>Вопрос:</strong></p>
            <p>Существует ли так называемые “единый реестр дипломов России” и можно ли по нему проверить тот или иной диплом?</p>
            <p><strong>Ответ:</strong></p>
            <p>На сегодняшний день не существует никакого единого реестре дипломов для ВУЗов России. Чтобы проверить подлинность документа, необходимо направлять запрос в соответствующий университет, где его будут сверять по бумажному носителю в том случае, если архивы не были утрачены.</p>
            <p><strong>Вопрос:</strong></p>
            <p>Насколько важна проверка диплома на работе?</p>
            <p><strong>Ответ:</strong></p>
            <p>Как мы указывали в предыдущем вопросе, быстрого способа проверить документ не существует — работодатель должен направить запрос на проверку диплома в учреждени. В большинстве случаев до этого не доходит, поскольку знания на собеседовании и в результате работы говорят сами за себя — ради простой формальности компании не готовы терять ценных и обученных сотрудников.</p>
            <p><strong>Вопрос:</strong></p>
            <p>Какую информацию можно выбрать при заказе диплома? Возможно ли изменить оценки, вписать любую специальность или ВУЗ?</p>
            <p><strong>Ответ:</strong></p>
            <p>Заказывая изготовление диплома в нашей компании, вы можете указать соответствующие параметры в формах онлайн-заявки. К ним относится любое учебное заведение на территории России, желаемые оценки и специальность.</p>
            <p><strong>Вопрос:</strong></p>
            <p>Изготавливаете ли вы дипломы государственного образца?</p>
            <p><strong>Ответ:</strong></p>
            <p>Да, наша компания занимается изготовлением дипломов государственного образца при наличии скана копии желаемого документа. Все бланки и печати соответствуют официальныМ, поэтому проблем с ними не возникнет.</p>
            <p><strong>Вопрос:</strong></p>
            <p>Можно ли приобрести диплом о высшем образовании не на прошедшее время, а на будущее?</p>
            <p><strong>Ответ:</strong></p>
            <p>Наша компания предлагает изготовление диплома о высшем образовании на любое время в зависимости от выбранного ВУЗа. что касается диплома с опережением — это возможно, но с опережением максимум на 1 год.</p>
            <p><strong>Вопрос:</strong></p>
            <p>Какие гарантии предоставляет ваша компания при покупке?</p>
            <p><strong>Ответ:</strong></p>
            <p>Покупая диплом в нашей компании, вы можете быть уверены в его качестве, а также прозрачности каждого этапа работы. Благодаря широчайшей информационно-технической базе мы можем выбирать дипломы из любого ВУЗа России, а большой опыт позволяет выполнять всё быстро и качественно, без вопросов со стороны комиссий. Одной из гарантий является оплата по факту получения — иными словами с начала заказа и до доставки мы работаем без предоплаты.</p>
            <p><strong>Вопрос:</strong></p>
            <p>Сколько занимает изготовление документа с учётом доставки? Сколько времени пройдёт с момента заказа?</p>
            <p><strong>Ответ:</strong></p>
            <p>Изготовление документа занимает не более 3 дней — в большинстве случаев он готов уже на вторые сутки. Остальные сроки целиком и полностью зависят от оперативности доставки и места назначения. Мы стараемся находить оптимальные решения для каждого клиента и сокращать срок доставки, однако это сугубо индивидуально — подробнее можно узнать у менеджера на этапе заказа.</p>
            <p><strong>Вопрос:</strong></p>
            <p>В дипломе нашлись опечатки, что делать?</p>
            <p><strong>Ответ:</strong></p>
            <p>Любые допущенные нашей компанией опечатки, помарки и другие ошибки являются основанием для замены диплома. В кратчайшие сроки мы заменим его на правильный вариант, при этом абсолютно бесплатно.</p>
            <p><strong>Вопрос:</strong></p>
            <p>Должен ли вкладыш с оценками обязательно прикладываться к диплому?</p>
            <p><strong>Ответ:</strong></p>
            <p>Вкладыш с указанными оценками является неотъемлемой частью документа о высшем образовании, поэтому он изготавливается и прикладывается к каждому диплому.</p>
            <p><strong>Вопрос:</strong></p>
            <p>Можно ли выбрать темы дипломных работ самостоятельно?</p>
            <p><strong>Ответ:</strong></p>
            <p>Наша компания учитывает все желания клиента. Отправляя заявку на нашем сайте, вы можете указать желаемые темы для дипломных работ в рамках специальности, мы же проверим их на соответствие при изготовлении макета и сборе информации.</p></div>
        </section>
        
        <!-- Секция наша команда -->
        <section class="section team-posts mt-40 mb-0">
          <div class="title-wrap title-wrap--line title-wrap--pr">
            <h3 class="section-title">Наша команда</h3>
          </div>
          <div class="content-team">
            <div class="content-team-container">
              <div class="content-team-item">
                <div class="image"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/photo/juriy-v.jpg" alt=""></div>
                <div class="team-prof">Консультант по продажам</div>
                <div class="team-name">Юрий В.</div>
                <div class="team-social">
                  <div class="team-social-title">Не теряемся, подписываемся на всё Мои соцсети:</div>
                  <div class="team-social-row">
                    <div class="team-social-item"><a href="#"><img src="" alt=""></a></div>
                    <div class="team-social-item"><a href="#"><img src="" alt=""></a></div>
                    <div class="team-social-item"><a href="#"><img src="" alt=""></a></div>
                  </div>
                </div>
              </div>
              <div class="content-team-item">
                <div class="image"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/photo/oleg-k.jpg" alt=""></div>
                <div class="team-prof">Консультант по продажам</div>
                <div class="team-name">Олег К.</div>
                <div class="team-social">
                  <div class="team-social-title">Следите за скидками на моих страницах Страницы в социальных сетях:</div>
                  <div class="team-social-row">
                    <div class="team-social-item"><a href="#"><img src="" alt=""></a></div>
                    <div class="team-social-item"><a href="#"><img src="" alt=""></a></div>
                    <div class="team-social-item"><a href="#"><img src="" alt=""></a></div>
                  </div>
                </div>
              </div>
              <div class="content-team-item">
                <div class="image"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/photo/artem-k.jpg" alt=""></div>
                <div class="team-prof">Консультант по продажам</div>
                <div class="team-name">Артём К.</div>
                <div class="team-social">
                  <div class="team-social-title">Добавляйтесь в друзья, всегда на связи Личные страницы:</div>
                  <div class="team-social-row">
                    <div class="team-social-item"><a href="#"><img src="" alt=""></a></div>
                    <div class="team-social-item"><a href="#"><img src="" alt=""></a></div>
                    <div class="team-social-item"><a href="#"><img src="" alt=""></a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <!-- Related Posts -->
        <section class="section related-posts mt-40 mb-0">
          <div class="title-wrap title-wrap--line title-wrap--pr">
            <h3 class="section-title">Related Articles</h3>
          </div>

          <!-- Slider -->
          <div id="owl-posts-3-items" class="owl-carousel owl-theme owl-carousel--arrows-outside">
            <article class="entry thumb thumb--size-1">
              <div class="entry__img-holder thumb__img-holder" style="background-image: url('img/content/carousel/carousel_post_1.jpg');">
                <div class="bottom-gradient"></div>
                <div class="thumb-text-holder">   
                  <h2 class="thumb-entry-title">
                    <a href="single-post.html">9 Things to Consider Before Accepting a New Job</a>
                  </h2>
                </div>
                <a href="single-post.html" class="thumb-url"></a>
              </div>
            </article>
            <article class="entry thumb thumb--size-1">
              <div class="entry__img-holder thumb__img-holder" style="background-image: url('img/content/carousel/carousel_post_2.jpg');">
                <div class="bottom-gradient"></div>
                <div class="thumb-text-holder">   
                  <h2 class="thumb-entry-title">
                    <a href="single-post.html">Gov’t Toughens Rules to Ensure 3rd Telco Player Doesn’t Slack Off</a>
                  </h2>
                </div>
                <a href="single-post.html" class="thumb-url"></a>
              </div>
            </article>
            <article class="entry thumb thumb--size-1">
              <div class="entry__img-holder thumb__img-holder" style="background-image: url('img/content/carousel/carousel_post_3.jpg');">
                <div class="bottom-gradient"></div>
                <div class="thumb-text-holder">   
                  <h2 class="thumb-entry-title">
                    <a href="single-post.html">(Infographic) Is Work-Life Balance Even Possible?</a>
                  </h2>
                </div>
                <a href="single-post.html" class="thumb-url"></a>
              </div>
            </article>
            <article class="entry thumb thumb--size-1">
              <div class="entry__img-holder thumb__img-holder" style="background-image: url('img/content/carousel/carousel_post_4.jpg');">
                <div class="bottom-gradient"></div>
                <div class="thumb-text-holder">   
                  <h2 class="thumb-entry-title">
                    <a href="single-post.html">Is Uber Considering To Sell its Southeast Asia Business to Grab?</a>
                  </h2>
                </div>
                <a href="single-post.html" class="thumb-url"></a>
              </div>
            </article>
            <article class="entry thumb thumb--size-1">
              <div class="entry__img-holder thumb__img-holder" style="background-image: url('img/content/carousel/carousel_post_2.jpg');">              
                <div class="bottom-gradient"></div>
                <div class="thumb-text-holder">   
                  <h2 class="thumb-entry-title">
                    <a href="single-post.html">Gov’t Toughens Rules to Ensure 3rd Telco Player Doesn’t Slack Off</a>
                  </h2>
                </div>
                <a href="single-post.html" class="thumb-url"></a>
              </div>
            </article>
          </div> <!-- end slider -->

        </section> <!-- end related posts -->            

      </article> <!-- end standard post -->

    </div> <!-- end content box -->
  </div> <!-- end post content -->
  
  <!-- Sidebar -->
  <aside class="col-lg-4 sidebar sidebar--right">

    <aside class="widget widget__custom-form">
      <?php
        if( is_active_sidebar('cust_sidebar_1') ){
          dynamic_sidebar('cust_sidebar_1');
        }
      ?>         
    </aside>
    <?php
        if( is_active_sidebar('cust_sidebar_2') ){
          dynamic_sidebar('cust_sidebar_2');
        }
    ?>
    <?php
      if( is_active_sidebar('pages_sidebar')){
        dynamic_sidebar('pages_sidebar');
      }
    ?> 

    <!-- Widget Socials -->
    <aside class="widget widget-socials">
      <h4 class="widget-title">Поделиться в соц. сетях</h4>
      <div class="socials socials--wide socials--large">
        <div class="row row-16">
          <div class="col">
            <a class="social social-facebook" href="#" title="facebook" target="_blank" aria-label="facebook">
              <i class="ui-facebook"></i>
              <span class="social__text">Facebook</span>
            </a><!--
            --><a class="social social-twitter" href="#" title="twitter" target="_blank" aria-label="twitter">
              <i class="ui-twitter"></i>
              <span class="social__text">Twitter</span>
            </a><!--
            --><a class="social social-youtube" href="#" title="youtube" target="_blank" aria-label="youtube">
              <i class="ui-youtube"></i>
              <span class="social__text">Youtube</span>
            </a>
          </div>
          <div class="col">
            <a class="social social-google-plus" href="#" title="google" target="_blank" aria-label="google">
              <i class="ui-google"></i>
              <span class="social__text">Google+</span>
            </a><!--
            --><a class="social social-instagram" href="#" title="instagram" target="_blank" aria-label="instagram">
              <i class="ui-instagram"></i>
              <span class="social__text">Instagram</span>
            </a><!--
            --><a class="social social-rss" href="#" title="rss" target="_blank" aria-label="rss">
              <i class="ui-rss"></i>
              <span class="social__text">Rss</span>
            </a>
          </div>                
        </div>            
      </div>
    </aside> <!-- end widget socials -->

  </aside> <!-- end sidebar -->

</div> <!-- end content -->
</div> <!-- end main container -->
<?php get_footer(); ?>