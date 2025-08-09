<?php
/**
 * Plugin Name: LyoCycle – Sekcja „O firmie”
 * Description: Shortcode [lyocycle_company_section] dodający sekcję o firmie LyoCycle.
 * Version: 1.0.0
 * Author: LyoCycle
 */

if ( ! defined('ABSPATH') ) exit;

class LyoCycle_Company_Section {
    const HANDLE = 'lyocycle-company';
    public function __construct() {
        add_shortcode('lyocycle_company_section', [$this, 'render']);
        add_action('wp_enqueue_scripts', [$this, 'register_assets']);
    }

    public function register_assets() {
        $base = plugin_dir_url(__FILE__);
        wp_register_style(self::HANDLE, $base.'assets/css/lyocycle-company.css', [], '1.0.0');
        wp_register_script(self::HANDLE, $base.'assets/js/lyocycle-company.js', [], '1.0.0', true);
    }

    private function features() {
        return [
            ['icon'=>'⚙️','title'=>'Inżynieria procesowa','desc'=>'Projektujemy i wdrażamy instalacje liofilizacji skrojone pod wymagania branży spożywczej i HoReCa.'],
            ['icon'=>'❄️','title'=>'Technologia liofilizacji','desc'=>'Stabilizacja jakości, pełnia smaku i wartości odżywczych – przy minimalnej aktywności wody.'],
            ['icon'=>'📊','title'=>'Optymalizacja kosztów','desc'=>'Bilans CAPEX/OPEX, odzysk energii, standaryzacja cykli i przeglądów serwisowych.'],
            ['icon'=>'🔒','title'=>'Jakość i zgodność','desc'=>'Procedury HACCP, dokumentacja, szkolenia i wsparcie audytowe.'],
        ];
    }

    public function render($atts = []) {
        wp_enqueue_style(self::HANDLE);
        wp_enqueue_script(self::HANDLE);

        $features = $this->features();

        ob_start(); ?>
<section id="lyo-company" class="lyo-company" aria-label="O firmie LyoCycle">
  <div class="lyo-wrap">
    <header class="lyo-head" data-reveal>
      <span class="eyebrow">LyoCycle</span>
      <h2>Zaawansowane rozwiązania liofilizacji dla nowoczesnej branży spożywczej</h2>
      <p class="lead">
        Dostarczamy kompletne systemy i usługi: od projektu, przez uruchomienie, po serwis.
        Nasza technologia pomaga ograniczać marnowanie żywności i wydłużać trwałość produktów,
        bez kompromisów w smaku i wartościach odżywczych.
      </p>
      <div class="lyo-cta">
        <a class="btn primary" href="<?php echo esc_url( home_url('/kontakt') ); ?>">Porozmawiaj z inżynierem</a>
        <a class="btn ghost" href="<?php echo esc_url( home_url('/realizacje') ); ?>">Zobacz realizacje</a>
      </div>
    </header>

    <div class="lyo-grid">
      <?php foreach ($features as $f): ?>
      <article class="card" data-reveal>
        <div class="icon"><?php echo esc_html($f['icon']); ?></div>
        <h3><?php echo esc_html($f['title']); ?></h3>
        <p><?php echo esc_html($f['desc']); ?></p>
      </article>
      <?php endforeach; ?>
    </div>

    <section class="lyo-badges" aria-label="Parametry i korzyści">
      <div class="badge" data-reveal>
        <strong>−95%</strong><span>masa wody</span>
      </div>
      <div class="badge" data-reveal>
        <strong>+24 mies.</strong><span>trwałość</span>
      </div>
      <div class="badge" data-reveal>
        <strong>IQF</strong><span>tekstura & smak</span>
      </div>
      <div class="badge" data-reveal>
        <strong>HACCP</strong><span>zgodność</span>
      </div>
    </section>

    <section class="lyo-cats" aria-label="Zastosowania">
      <h3 data-reveal>Zastosowania</h3>
      <ul class="cats" data-reveal>
        <li><span class="dot"></span> Zupy i sosy</li>
        <li><span class="dot"></span> Sałatki & dressingi</li>
        <li><span class="dot"></span> Przekąski i żywność funkcjonalna</li>
        <li><span class="dot"></span> Mleko i alternatywy roślinne</li>
        <li><span class="dot"></span> Napoje instant</li>
      </ul>
    </section>
  </div>
  <div class="lyo-bg" aria-hidden="true"></div>
</section>
<?php
        return ob_get_clean();
    }
}
new LyoCycle_Company_Section();
