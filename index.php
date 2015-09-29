<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
    "http://www.w3.org/TR/html4/strict.dtd">
<?php ini_set('display_errors', 'On'); ?>

<html lang="fr">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <title>Comparatif : les prix des livres électronique et papier</title>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,400italic,700,700italic|Roboto+Slab:700|Vollkorn:400,400italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/jquery.phancy.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet"> 
    <script type="text/javascript" src="//code.jquery.com/jquery-1.10.2.min.js"></script> 
    <script type="text/javascript" src="js/handlebars-v3.0.3.js"></script>
    <script type="text/javascript" src="js/jquery.phancy.js"></script>
  </head>
  <body>
    <header>
    </header>   
    <article> 
      <section id="ebook_vs_poche">  
        <h2 class="first">La plupart des livres étudiés coûtent plus cher en ebook qu'en poche</h2> 
        <p class="teaser">Le prix de la version électronique comparé à celui de l'édition poche. Sur 30 ebooks, seuls 6 sont moins chers que leur équivalent poche, 5 ont le même prix.</p> 
        <div class="list" id="list_poche"></div> 
      </section>
      <section id="ebook_vs_broche">
        <h2>Comparé à l'édition originale, un rabais très variable pour la version ebook.</h2>
        <p class="teaser">La remise varie entre -17% et -68% pour les 52 livres étudiés, pour une moyenne de -41%.</p>
        <div class="list" id="list_broche"></div>          
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
                        <div class="title">{{{titre}}}</div>
                        <div class="author">Par {{{auteur}}} <span class="show_more">(infos)</span></div>
                      </div>  
                     <div class="more transition_height">
                        <div class="prices">
                        <table>
                          <tbody>
                            <tr><td>Original ({{{editeur_broche}}})</td><td>{{{prix_broche}}}&nbsp;€</td></tr>
                            <tr class="poche_{{{paru_poche}}}"><td>Poche ({{{editeur_poche}}})</td><td>{{{prix_poche}}}&nbsp;€</td></tr>
                            <tr><td>iBook (Apple)</td><td>{{{prix_elec_apple}}}&nbsp;€</td></tr>
                            <tr><td>Kindle (Amazon)</td><td>{{{prix_elec_amazon}}}&nbsp;€</td></tr>
                            <tr><td>Diff. ebook / original</td><td>{{{diff_broche_100}}}&nbsp;%</td></tr>
                            <tr class="poche_{{{paru_poche}}}"><td>Diff. ebook / poche</td><td>{{{diff_poche_100}}}&nbsp;%</td></tr>
                          </tbody>  
                        </table>
                        </div>
                        <div class="credit_photo">Photo&nbsp;: {{{credit_photo}}}.</div>                         
                       </div> 
                   </div>
                </div>
                <div class="middle">
                  <div class="author_img"> 
                    <img src="img/{{{id_img}}}.jpg" alt="{{{auteur}}} ({{{credit_photo}}})" title="{{{auteur}}} ({{{credit_photo}}})" />
                   </div>  
                </div>
                <div class="right">
                   <div class="bar bar_right" ></div>
                   <div class="book_info"> 
                      <div class="right_info">
                        <div class="title">{{{titre}}}</div>
                        <div class="author">Par {{{auteur}}} <span class="show_more">(infos)</span></div>
                      </div>   
                     <div class="more transition_height">
                        <div class="prices">
                        <table>
                          <tbody>
                            <tr><td>Original ({{{editeur_broche}}})</td><td>{{{prix_broche}}}&nbsp;€</td></tr>
                            <tr class="poche_{{{paru_poche}}}"><td>Poche ({{{editeur_poche}}})</td><td>{{{prix_poche}}}&nbsp;€</td></tr>
                            <tr><td>iBook (Apple)</td><td>{{{prix_elec_apple}}}&nbsp;€</td></tr>
                            <tr><td>Kindle (Amazon)</td><td>{{{prix_elec_amazon}}}&nbsp;€</td></tr>
                            <tr><td>Diff. ebook / original</td><td>{{{diff_broche_100}}}&nbsp;%</td></tr>
                            <tr class="poche_{{{paru_poche}}}"><td>Diff. ebook / poche</td><td>{{{diff_poche_100}}}&nbsp;%</td></tr>
                          </tbody>  
                        </table>
                        </div>
                        <div class="credit_photo">Photo&nbsp;: {{{credit_photo}}}.</div>                         
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
                    <div class="title">{{{titre}}}</div>
                    <div class="author">Par {{{auteur}}} <span class="show_more">(infos)</span></div>
                  </div>  
                  <div class="more transition_height">
                       <div class="prices">
                        <table>
                          <tbody>
                            <tr><td>Original ({{{editeur_broche}}})</td><td>{{{prix_broche}}}&nbsp;€</td></tr>
                            <tr class="poche_{{{paru_poche}}}"><td>Poche ({{{editeur_poche}}})</td><td>{{{prix_poche}}}&nbsp;€</td></tr>
                            <tr><td>iBook (Apple)</td><td>{{{prix_elec_apple}}}&nbsp;€</td></tr>
                            <tr><td>Kindle (Amazon)</td><td>{{{prix_elec_amazon}}}&nbsp;€</td></tr>
                            <tr><td>Diff. ebook / original</td><td>{{{diff_broche_100}}}&nbsp;%</td></tr>
                            <tr class="poche_{{{paru_poche}}}"><td>Diff. ebook / poche</td><td>{{{diff_poche_100}}}&nbsp;%</td></tr>
                          </tbody>  
                        </table>
                        </div>
                      <div class="credit_photo">Photo&nbsp;: {{{credit_photo}}}.</div>                         
                     </div> 
                 </div>
              </div>
              <div class="middle">
                <div class="author_img"> 
                  <img src="img/{{{id_img}}}.jpg" alt="{{{auteur}}} ({{{credit_photo}}})" title="{{{auteur}}} ({{{credit_photo}}})" />
                </div>  
              </div>
              <div class="right">
                 <div class="bar bar_right" ></div>
                 <div class="book_info"> 
                  <div class="right_info">
                    <div class="title">{{{titre}}}</div>
                    <div class="author">Par {{{auteur}}} <span class="show_more">(infos)</span></div>
                  </div>  
                   <div class="more transition_height">
                        <div class="prices">
                        <table>
                          <tbody>
                            <tr><td>Original ({{{editeur_broche}}})</td><td>{{{prix_broche}}}&nbsp;€</td></tr>
                            <tr class="poche_{{{paru_poche}}}"><td>Poche ({{{editeur_poche}}})</td><td>{{{prix_poche}}}&nbsp;€</td></tr>
                            <tr><td>iBook (Apple)</td><td>{{{prix_elec_apple}}}&nbsp;€</td></tr>
                            <tr><td>Kindle (Amazon)</td><td>{{{prix_elec_amazon}}}&nbsp;€</td></tr>
                            <tr><td>Diff. ebook / original</td><td>{{{diff_broche_100}}}&nbsp;%</td></tr>
                            <tr class="poche_{{{paru_poche}}}"><td>Diff. ebook / poche</td><td>{{{diff_poche_100}}}&nbsp;%</td></tr>
                          </tbody>  
                        </table>
                        </div>
                      <div class="credit_photo">Photo&nbsp;: {{{credit_photo}}}.</div>                         
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
