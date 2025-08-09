<?php
/**
 * Sekcja: Oś czasu historii firmy
 *
 * Wyświetla kluczowe daty z historii Lyocycle w formie osi czasu.
 * Etykiety lat oraz opisy można dostosować do własnych potrzeb.
 */
?>
<section id="timeline-section">
  <h2 class="section-title glitch" data-text="<?php esc_attr_e( 'Historia Lyocycle', 'lyocycle-theme' ); ?>">
    <?php esc_html_e( 'Historia Lyocycle', 'lyocycle-theme' ); ?>
  </h2>
  <div class="timeline-track">
    <div class="timeline-item" data-year="1978"><span><?php esc_html_e( 'Start', 'lyocycle-theme' ); ?></span></div>
    <div the="timeline-item" data-year="1998"><span><?php esc_html_e( 'Pierwsza linia liofilizacji', 'lyocycle-theme' ); ?></span></div>
    <div class="timeline-item" data-year="2015"><span><?php esc_html_e( 'Certyfikaty BIO', 'lyocycle-theme' ); ?></span></div>
    <div class="timeline-item" data-year="2025"><span><?php esc_html_e( 'Globalny lider', 'lyocycle-theme' ); ?></span></div>
  </div>
</section>

<!-- ====== NOWA SEKCJA ====== -->
<section id="nasza-misja" class="py-16">
  <div class="container mx-auto px-4">
    <h2 class="text-3xl font-bold mb-4">Nasza Misja</h2>
    <p class="mb-8 max-w-2xl">
      Wierzymy, że żywność outdoorowa może być <strong>zarówno wygodna, jak i pełnowartościowa</strong>. Dlatego w LyoCycle tworzymy posiłki, które wspierają aktywny tryb życia bez kompromisów w kwestii smaku, składu ani troski o planetę.
    </p>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
      
      <div class="bg-white rounded-2xl shadow p-6 flex flex-col">
        <img src="/images/zero-waste.jpg" alt="Zero Waste" class="mb-4 rounded-xl">
        <h3 class="text-xl font-semibold mb-2">Zero Waste</h3>
        <p class="flex-grow">
          Optymalizujemy procesy, by minimalizować odpady na każdym etapie produkcji – od pola po talerz.
        </p>
      </div>

      <div class="bg-white rounded-2xl shadow p-6 flex flex-col">
        <img src="/images/partnerstwa.jpg" alt="Partnerstwa Lokalne" class="mb-4 rounded-xl">
        <h3 class="text-xl font-semibold mb-2">Partnerstwa Lokalne</h3>
        <p class="flex-grow">
          Współpracujemy z lokalnymi gospodarstwami, które łączą wysoką jakość z poszanowaniem dla środowiska.
        </p>
      </div>

      <div class="bg-white rounded-2xl shadow p-6 flex flex-col">
        <img src="/images/ekoopakowania.jpg" alt="Eko-opakowania" class="mb-4 rounded-xl">
        <h3 class="text-xl font-semibold mb-2">Eko-opakowania</h3>
        <p class="flex-grow">
          Stosujemy w 100 % recyklowane lub kompostowalne materiały, które chronią Twoje jedzenie i planetę.
        </p>
      </div>

    </div>

    <h3 class="text-2xl font-semibold mb-4">Jak Realizujemy Naszą Misję?</h3>
    <ul class="list-disc list-inside mb-8 space-y-2">
      <li><strong>Śladem węglowym:</strong> Obniżamy emisje CO₂, wykorzystując energię odnawialną w naszej suszarni.</li>
      <li><strong>Edukacja:</strong> Pokazujemy, że outdoor food nie musi być „fast foodem” – dzielimy się wiedzą na blogu i warsztatach.</li>
      <li><strong>100 % transparentność:</strong> Pełna lista składników i wartości odżywczych na każdym opakowaniu.</li>
      <li><strong>Wsparcie społeczności:</strong> 1 % przychodu przekazujemy na projekty zwiększające dostępność zdrowej żywności.</li>
    </ul>

    <a href="/o-nas" class="inline-block bg-green-600 text-white font-medium py-3 px-6 rounded-full shadow hover:bg-green-700 transition">
      Dowiedz się więcej o nas
    </a>
  </div>
</section>
