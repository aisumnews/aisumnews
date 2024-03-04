<p align="center"><a href="https://aisumnews.com" target="_blank"><img src="https://aisumnews.com/images/default.jpeg" width="400" alt="AISumNews Logo"></a></p>
<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About AISumNews
AISumNews or shortened for AI Summarized News is an open source application for displaying summarized news content from around the web.

The application is build using **Laravel** framework.

The server side runs in the background which is not open source. The web based is accessible from [AISumNews](https://aisumnews.com).

## Installation and Development

If you want to try the application you need a working laravel 10.x with php >= 8.3 and composer >=2.4 and MySQl database.

### Requirements
- PHP >= 8.3
- Composer >= 2.7.1
- MySQL >= 8.0
- Libraries requires to run Laravel

### Development
 1. First clone the repository
 `git clone https://github.com/aisumnews/aisumnews_laravel_ui_api.git`
 `cd aisumnews_laravel_ui_api`
 2. Install Dependencies
 `composer install`
 3. Create .env file
 `cp .env.example .env`
 4. Modify Database Information in the .env file
 5. Generate Application Key
 `php artisan key:generate`
 6. Create Database tables
 `php artisan migrate`
  To start fresh if you have already tables created earlier
  `php artisan migrate:fresh`
  Note: This will delete the previously created tables
 7. Serve the local development
 `php artisan serve`

 Now access from your web browser [http://localhost:8000](http://localhost:8000) 

## Contribution
- Design and Developement
    How you wants to see the aisumnews depends on your contribution in design and development. All the contributions are welcome.
- Languages
    There are currently only (208) languages around the world are supported. Out of which only 22 languages are from India. We will add many more in future with your contributions.

## Screenshots
![Home Page](/screenshots/home_page.jpeg)
![English News](/screenshots/eng_news.jpeg)
![Hindi News](/screenshots/hindi_news.jpeg)
![Portuguese News](/screenshots/port_news.jpeg)

## Supported Languages
    Assamese (asm_Beng)
    Bengali (ben_Beng)
    Bodo (brx_Deva)
    Dogri (doi_Deva)
    English (eng_Latn)
    Konkani (gom_Deva)
    Gujarati (guj_Gujr)
    Hindi (hin_Deva)
    Kannada (kan_Knda)
    Kashmiri (Arabic) (kas_Arab)
    Kashmiri (Devanagari) (kas_Deva)
    Maithili (mai_Deva)
    Malayalam (mal_Mlym)
    Marathi (mar_Deva)
    Manipuri (Bengali) (mni_Beng)
    Manipuri (Meitei) (mni_Mtei)
    Nepali (npi_Deva)
    Odia (ory_Orya)
    Punjabi (pan_Guru)
    Sanskrit (san_Deva)
    Santali (Olcinkie) (sat_Olck)
    Sindhi (Arabic) (snd_Arab)
    Sindhi (Devanagari) (snd_Deva)
    Tamil (tam_Taml)
    Telugu (tel_Telu)
    Urdu (urd_Arab)
    Acehnese (Arabic script) (ace_Arab)
    Acehnese (Latin script) (ace_Latn)
    Mesopotamian Arabic (acm_Arab)
    Ta’izzi-Adeni Arabic (acq_Arab)
    Tunisian Arabic (aeb_Arab)
    Afrikaans (afr_Latn)
    South Levantine Arabic (ajp_Arab)
    Akan (aka_Latn)
    Amharic (amh_Ethi)
    North Levantine Arabic (apc_Arab)
    Modern Standard Arabic (arb_Arab)
    Modern Standard Arabic (Romanized) (arb_Latn)
    Najdi Arabic (ars_Arab)
    Moroccan Arabic (ary_Arab)
    Egyptian Arabic (arz_Arab)
    Asturian (ast_Latn)
    Awadhi (awa_Deva)
    Central Aymara (ayr_Latn)
    South Azerbaijani (azb_Arab)
    North Azerbaijani (azj_Latn)
    Bashkir (bak_Cyrl)
    Bambara (bam_Latn)
    Balinese (ban_Latn)
    Belarusian (bel_Cyrl)
    Bemba (bem_Latn)
    Banjar (Arabic script) (bjn_Arab)
    Banjar (Latin script) (bjn_Latn)
    Standard Tibetan (bod_Tibt)
    Bosnian (bos_Latn)
    Buginese (bug_Latn)
    Bulgarian (bul_Cyrl)
    Catalan (cat_Latn)
    Cebuano (ceb_Latn)
    Czech (ces_Latn)
    Chokwe (cjk_Latn)
    Central Kurdish (ckb_Arab)
    Crimean Tatar (crh_Latn)
    Welsh (cym_Latn)
    Danish (dan_Latn)
    German (deu_Latn)
    Southwestern Dinka (dik_Latn)
    Dyula (dyu_Latn)
    Dzongkha (dzo_Tibt)
    Greek (ell_Grek)
    Esperanto (epo_Latn)
    Estonian (est_Latn)
    Basque (eus_Latn)
    Ewe (ewe_Latn)
    Faroese (fao_Latn)
    Fijian (fij_Latn)
    Finnish (fin_Latn)
    Fon (fon_Latn)
    French (fra_Latn)
    Friulian (fur_Latn)
    Nigerian Fulfulde (fuv_Latn)
    Scottish Gaelic (gla_Latn)
    Irish (gle_Latn)
    Galician (glg_Latn)
    Guarani (grn_Latn)
    Haitian Creole (hat_Latn)
    Hausa (hau_Latn)
    Hebrew (heb_Hebr)
    Chhattisgarhi (hne_Deva)
    Croatian (hrv_Latn)
    Hungarian (hun_Latn)
    Armenian (hye_Armn)
    Igbo (ibo_Latn)
    Ilocano (ilo_Latn)
    Indonesian (ind_Latn)
    Icelandic (isl_Latn)
    Italian (ita_Latn)
    Javanese (jav_Latn)
    Japanese (jpn_Jpan)
    Kabyle (kab_Latn)
    Jingpho (kac_Latn)
    Kamba (kam_Latn)
    Georgian (kat_Geor)
    Central Kanuri (Arabic script) (knc_Arab)
    Central Kanuri (Latin script) (knc_Latn)
    Kazakh (kaz_Cyrl)
    Kabiyè (kbp_Latn)
    Kabuverdianu (kea_Latn)
    Khmer (khm_Khmr)
    Kikuyu (kik_Latn)
    Kinyarwanda (kin_Latn)
    Kyrgyz (kir_Cyrl)
    Kimbundu (kmb_Latn)
    Northern Kurdish (kmr_Latn)
    Kikongo (kon_Latn)
    Korean (kor_Hang)
    Lao (lao_Laoo)
    Ligurian (lij_Latn)
    Limburgish (lim_Latn)
    Lingala (lin_Latn)
    Lithuanian (lit_Latn)
    Lombard (lmo_Latn)
    Latgalian (ltg_Latn)
    Luxembourgish (ltz_Latn)
    Luba-Kasai (lua_Latn)
    Ganda (lug_Latn)
    Luo (luo_Latn)
    Mizo (lus_Latn)
    Standard Latvian (lvs_Latn)
    Magahi (mag_Deva)
    Minangkabau (Arabic script) (min_Arab)
    Minangkabau (Latin script) (min_Latn)
    Macedonian (mkd_Cyrl)
    Plateau Malagasy (plt_Latn)
    Maltese (mlt_Latn)
    Halh Mongolian (khk_Cyrl)
    Mossi (mos_Latn)
    Maori (mri_Latn)
    Burmese (mya_Mymr)
    Dutch (nld_Latn)
    Norwegian Nynorsk (nno_Latn)
    Norwegian Bokmål (nob_Latn)
    Northern Sotho (nso_Latn)
    Nuer (nus_Latn)
    Nyanja (nya_Latn)
    Occitan (oci_Latn)
    West Central Oromo (gaz_Latn)
    Pangasinan (pag_Latn)
    Papiamento (pap_Latn)
    Western Persian (pes_Arab)
    Polish (pol_Latn)
    Portuguese (por_Latn)
    Dari (prs_Arab)
    Southern Pashto (pbt_Arab)
    Ayacucho Quechua (quy_Latn)
    Romanian (ron_Latn)
    Rundi (run_Latn)
    Russian (rus_Cyrl)
    Sango (sag_Latn)
    Sicilian (scn_Latn)
    Shan (shn_Mymr)
    Sinhala (sin_Sinh)
    Slovak (slk_Latn)
    Slovenian (slv_Latn)
    Samoan (smo_Latn)
    Shona (sna_Latn)
    Somali (som_Latn)
    Southern Sotho (sot_Latn)
    Spanish (spa_Latn)
    Tosk Albanian (als_Latn)
    Sardinian (srd_Latn)
    Serbian (srp_Cyrl)
    Swati (ssw_Latn)
    Sundanese (sun_Latn)
    Swedish (swe_Latn)
    Swahili (swh_Latn)
    Silesian (szl_Latn)
    Tatar (tat_Cyrl)
    Tajik (tgk_Cyrl)
    Tagalog (tgl_Latn)
    Thai (tha_Thai)
    Tigrinya (tir_Ethi)
    Tamasheq (Latin script) (taq_Latn)
    Tamasheq (Tifinagh script) (taq_Tfng)
    Tok Pisin (tpi_Latn)
    Tswana (tsn_Latn)
    Tsonga (tso_Latn)
    Turkmen (tuk_Latn)
    Tumbuka (tum_Latn)
    Turkish (tur_Latn)
    Twi (twi_Latn)
    Central Atlas Tamazight (tzm_Tfng)
    Uyghur (uig_Arab)
    Ukrainian (ukr_Cyrl)
    Umbundu (umb_Latn)
    Northern Uzbek (uzn_Latn)
    Venetian (vec_Latn)
    Vietnamese (vie_Latn)
    Waray (war_Latn)
    Wolof (wol_Latn)
    Xhosa (xho_Latn)
    Eastern Yiddish (ydd_Hebr)
    Yoruba (yor_Latn)
    Yue Chinese (yue_Hant)
    Chinese (Simplified) (zho_Hans)
    Chinese (Traditional) (zho_Hant)
    Standard Malay (zsm_Latn)
    Zulu (zul_Latn)


## License

The AISumNews application is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## Contributor

Hi I developed this **aisumnews** :). I speak Bodo, however I feel any content news/information should be available in all the languages. Currently my personal translation engine and summarization engine can not serve multiple translations at high rate. Which may result in delayed/no translation for specific languages. Celery feeds too much data to translation engine, however it will be overcome in future if I own high performance machines. Please visit my profile for more about me [Sanjib Narzary](https://sanjibnarzary.github.io)
