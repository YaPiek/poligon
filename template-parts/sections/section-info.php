<?php
/**
 * LyoCycle – Sekcja „O firmie / Składniki”
 * Bezpośredni include NIE wypisuje HTML. Użyj shortcode [lyocycle_company_section]
 * albo echo lyocycle_render_company_section();
 */

if ( ! defined( 'ABSPATH' ) ) exit;

if ( ! function_exists( 'lyocycle_render_company_section' ) ) {

    function lyocycle_render_company_section( $atts = [] ) {
        $atts = shortcode_atts([], $atts, 'lyocycle_company_section');

        ob_start();
        ?>
        <section id="info" class="lyo-sec" aria-labelledby="lyo-sec-title">
            

            <div class="lyo-wrap">
                <header>
                    <h2 id="lyo-sec-title">
                        Liofilizowane i suszone na powietrzu składniki dla nowoczesnego przemysłu spożywczego
                    </h2>
                    <p class="lyo-lead">
                        Naszą wizją są delikatnie liofilizowane oraz suszone na powietrzu składniki premium — 100% naturalne,
                        pełne aromatu, wszechstronne i z długim okresem przydatności do spożycia. Dostępne w wersji
                        konwencjonalnej i ekologicznej.
                    </p>
                </header>

                <hr class="lyo-hr" />

                <div class="lyo-grid">
                    <div class="lyo-col lyo-col-7">
                        <div class="blk">
                            <h3>Od świeżego surowca do gotowego składnika</h3>
                            <p>
                                Jako pionierzy i eksperci w liofilizacji, delikatnie przetwarzamy świeże surowce dla przemysłu
                                spożywczego. Oferujemy m.in. owoce, warzywa, chrupki i crunchies, słodycze i dropsy, zioła
                                i przyprawy, superfoods, a także mięso, ser oraz ich roślinne alternatywy.
                                Wspieramy <strong>start-upy</strong>, <strong>MŚP</strong> i <strong>liderów branży</strong> w projektach R&amp;D,
                                wdrożeniach i skalowaniu produkcji.
                            </p>
                            <div class="chips" aria-label="Cechy produktu">
                                <span class="chip">100% naturalne</span>
                                <span class="chip">pełny aromat</span>
                                <span class="chip">długi shelf-life</span>
                                <span class="chip">eko i konwencjonalne</span>
                                <span class="chip">składniki premium</span>
                            </div>
                        </div>
                    </div>

                    <div class="lyo-col lyo-col-5">
                        <div class="blk">
                            <h3>Witamy w LyoCycle</h3>
                            <p>
                                Łączymy technologię liofilizacji z potrzebami nowoczesnego rynku.
                                Dostarczamy składniki i wsparcie procesowe dla producentów żywności, marek private-label
                                oraz innowatorów rozwijających produkty funkcjonalne i wygodne w użyciu.
                            </p>
                        </div>
                    </div>
                </div>

                <hr class="lyo-hr" />

                <div class="lyo-grid">
                    <div class="lyo-col">
                        <div class="cats" role="list" aria-label="Kategorie składników">
                            <?php
                            // Kategorie do wyświetlenia (łatwo modyfikowalne)
                            $cats = [
                                ['emoji'=>'🍓','t'=>'Owoce liofilizowane','d'=>'Musli, batony, desery, czekolady, dekoracje cukiernicze.'],
                                ['emoji'=>'🥦','t'=>'Warzywa liofilizowane','d'=>'Zupy, sosy, dania instant, przekąski i mieszanki.'],
                                ['emoji'=>'🥣','t'=>'Musli & batony','d'=>'Crunchies, kawałki owoców i warzyw, superfoods w blendach.'],
                                ['emoji'=>'🥨','t'=>'Przekąski','d'=>'Chrupiące dodatki, mieszanki smakowe i premium „snack-mix”.'],
                                ['emoji'=>'🧂','t'=>'Zioła i przyprawy','d'=>'Mieszanki przypraw, sosy, dressingi, marynaty i posypki.'],
                                ['emoji'=>'🍜','t'=>'Zupy & sosy','d'=>'Bazy smakowe, wkładki warzywne i białkowe, clean-label.'],
                                ['emoji'=>'🥗','t'=>'Sałatki i dressingi','d'=>'Dodatki chrupiące, przyprawy, owoce i warzywa w kostce.'],
                                ['emoji'=>'🥛','t'=>'Nabiał & roślinne alternatywy','d'=>'Proszki i inkluzje do jogurtów, napojów, deserów i lodów.'],
                                ['emoji'=>'🥩','t'=>'Mięso & alternatywy roślinne','d'=>'Składniki białkowe do dań gotowych i przekąsek wysokobiałkowych.'],
                                ['emoji'=>'☕','t'=>'Napoje instant','d'=>'Granulaty i proszki smakowe, owoce liofilizowane do napojów.'],
                                ['emoji'=>'🌿','t'=>'Superfoods liofilizowane','d'=>'Funkcjonalne mieszanki, nutraceutyki, produkty wellness.'],
                                ['emoji'=>'💊','t'=>'Suplementy & żywność funkcjonalna','d'=>'Składniki premium do R&amp;D, kapsułek, tabletek i proszków.'],
                                ['emoji'=>'🔥','t'=>'Outdoor & żywność na wyprawy','d'=>'Posiłki lekkie, trwałe i pełnowartościowe do szybkiego odtworzenia.'],
                                ['emoji'=>'🧑‍🍳','t'=>'Składniki dla cukiernictwa','d'=>'Dekoracje, inkluzje do czekolady, nadzienia i musy.'],
                            ];
                            foreach ($cats as $c): ?>
                                <article class="cat" role="listitem">
                                    <div class="ico" aria-hidden="true"><?php echo esc_html($c['emoji']); ?></div>
                                    <div>
                                        <h4><?php echo esc_html($c['t']); ?></h4>
                                        <p><?php echo esc_html($c['d']); ?></p>
                                    </div>
                                </article>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php
        return ob_get_clean();
    }
}

/** Shortcode: [lyocycle_company_section] */
add_shortcode('lyocycle_company_section', function($atts = []) {
    return lyocycle_render_company_section($atts);
});
