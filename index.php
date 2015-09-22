<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
    "http://www.w3.org/TR/html4/strict.dtd">
<?php ini_set('display_errors', 'On'); ?>

<html lang="fr">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <title>Comparatif : les prix des livres électronique et papier</title>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,400italic,700,700italic|Roboto+Slab:700|Vollkorn:400,400italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet"> 
    <script type="text/javascript" src="//code.jquery.com/jquery-1.10.2.min.js"></script> 
    <script type="text/javascript" src="js/handlebars-v3.0.3.js"></script>

       <!-- 
    <script type="text/javascript" src="js/jquery.svg.js"></script>
    <script type="text/javascript" src="js/jquery.svgdom.js"></script>
    <script type="text/javascript" src="js/jquery.viewport.mini.js"></script>
   -->   

  </head>
  <body>
    <header>
    </header>   
    <article style="width:766px;"> 
      <section id="ebook_vs_poche">  
        <h2>Les prix des ebooks comparés au prix des poches</h2>  
      </section>
      <section id="ebook_vs_broche">
        <h2>Les prix des ebooks comparés au prix des éditions originales</h2>  
      </section> 
    </article>
    <footer>
    </footer>
    <script id="handlebars_template_1" type="text/x-handlebars-template">
            {{#each_by_diff_poch feed}}
             {{#if auteur}}
             <div class="entry_book poche_{{{paru_poche}}}" id="{{{id}}}" diff_poche="{{{diff_poche}}}" diff_broche="{{{diff_broche}}}">
                <div class="left">
                   <div class="bar bar_left" ></div>
                   <div class="book_info"> 
                     <div class="left_info">
                       <div class="author">{{{auteur}}}</div>
                       <div class="title show_more">Livre&nbsp;: <span>{{{titre}}}</span> </div>   
                     </div>  
                     <div class="more transition_height">
                         <div class="prices">
                          <div>
                            Original ({{{editeur_broche}}})<br />
                            Poche ({{{editeur_poche}}})<br />
                            iBook<br />
                            Kindle<br />
                            Diff. ebook / original<br /> 
                            Diff. ebook / poche<br />                                 
                          </div>
                          <div>
                            {{{prix_broche}}}&nbsp;€<br />
                            {{{prix_poche}}}&nbsp;€<br />
                            {{{prix_elec_apple}}}&nbsp;€<br />
                            {{{prix_elec_amazon}}}&nbsp;€<br />
                            {{{diff_broche_100}}}&nbsp;%<br />
                            {{{diff_poche_100}}}&nbsp;%
                          </div> 
                         </div>
                       </div> 
                   </div>
                </div>
                <div class="middle">
                  <div class="author_img">
                  <img src="img/beigbeder.jpg">
                  </div>
                </div>
                <div class="right">
                   <div class="bar bar_right" ></div>
                   <div class="book_info"> 
                     <div class="right_info">
                       <div class="author">{{{auteur}}}</div>
                       <div class="title show_more">Livre&nbsp;: <span>{{{titre}}}</span> </div>   
                     </div>  
                     <div class="more transition_height">
                         <div class="prices">
                          <div>
                            Original ({{{editeur_broche}}})<br />
                            Poche ({{{editeur_poche}}})<br />
                            iBook<br />
                            Kindle<br />
                            Diff. ebook / original<br /> 
                            Diff. ebook / poche<br />                                 
                          </div>
                          <div>
                            {{{prix_broche}}}&nbsp;€<br />
                            {{{prix_poche}}}&nbsp;€<br />
                            {{{prix_elec_apple}}}&nbsp;€<br />
                            {{{prix_elec_amazon}}}&nbsp;€<br />
                            {{{diff_broche_100}}}&nbsp;%<br />
                            {{{diff_poche_100}}}&nbsp;%
                          </div> 
                         </div>
                       </div> 
                   </div>
                </div>
                <div class="diff diff_grey"><div></div></div>
             </div>
              
            {{/if}}
           {{/each_by_diff_poch}}
    </script>
    <script id="handlebars_template_2" type="text/x-handlebars-template">
          {{#each_by_diff_broch feed}}
           {{#if auteur}}
           <div class="entry_book poche_{{{paru_poche}}}" id="{{{id}}}" diff_poche="{{{diff_poche}}}" diff_broche="{{{diff_broche}}}">
              <div class="left">
                 <div class="bar bar_left" ></div>
                 <div class="book_info"> 
                   <div class="left_info">
                     <div class="author">{{{auteur}}}</div>
                     <div class="title show_more">Livre&nbsp;: <span>{{{titre}}}</span> </div>   
                   </div>  
                   <div class="more transition_height">
                       <div class="prices">
                        <div>
                          Original ({{{editeur_broche}}})<br />
                          Poche ({{{editeur_poche}}})<br />
                          iBook<br />
                          Kindle<br />
                          Diff. ebook / original<br /> 
                          Diff. ebook / poche<br />                                 
                        </div>
                        <div>
                          {{{prix_broche}}}&nbsp;€<br />
                          {{{prix_poche}}}&nbsp;€<br />
                          {{{prix_elec_apple}}}&nbsp;€<br />
                          {{{prix_elec_amazon}}}&nbsp;€<br />
                          {{{diff_broche_100}}}&nbsp;%<br />
                          {{{diff_poche_100}}}&nbsp;%
                        </div> 
                       </div>
                     </div> 
                 </div>
              </div>
              <div class="middle">
                <div class="author_img">
                <img src="img/beigbeder.jpg">
                </div>
              </div>
              <div class="right">
                 <div class="bar bar_right" ></div>
                 <div class="book_info"> 
                   <div class="right_info">
                     <div class="author">{{{auteur}}}</div>
                     <div class="title show_more">Livre&nbsp;: <span>{{{titre}}}</span> </div>   
                   </div>  
                   <div class="more transition_height">
                       <div class="prices">
                        <div>
                          Original ({{{editeur_broche}}})<br />
                          Poche ({{{editeur_poche}}})<br />
                          iBook<br />
                          Kindle<br />
                          Diff. ebook / original<br /> 
                          Diff. ebook / poche<br />                                 
                        </div>
                        <div>
                          {{{prix_broche}}}&nbsp;€<br />
                          {{{prix_poche}}}&nbsp;€<br />
                          {{{prix_elec_apple}}}&nbsp;€<br />
                          {{{prix_elec_amazon}}}&nbsp;€<br />
                          {{{diff_broche_100}}}&nbsp;%<br />
                          {{{diff_poche_100}}}&nbsp;%
                        </div> 
                       </div>
                     </div> 
                 </div>
              </div>
              <div class="diff diff_grey"><div></div></div>
           </div>
            
          {{/if}}
         {{/each_by_diff_broch}}
    </script>    
    <script type="text/javascript" src="js/script.js"></script>
  </body>
</html>
