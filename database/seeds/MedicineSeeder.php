<?php

use Illuminate\Database\Seeder;

class MedicineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('medicines')->insert(
            ['generic_name' => 'asam mefenamat',
             'form' => 'kaps 250 mg',
             'restriction_formula' =>'30 kaps/bulan.',
             'price' => 10000,
             'description' =>'',
             'faskes1' => '1',
             'faskes2' => '1',
             'faskes3' => '1',
             'photo' => '',
             'category_id'=>1
        ]);

        DB::table('medicines')->insert(
            ['generic_name' => 'asam mefenamat',
             'form' => 'tab 500 mg',
             'restriction_formula' =>'30 tab/bulan.',
             'price' => 12000,
             'description' =>'',
             'faskes1' => '1',
             'faskes2' => '1',
             'faskes3' => '1',
             'photo' => '',
             'category_id'=>1
        ]);

        DB::table('medicines')->insert(
            ['generic_name' => 'ibuprofen',
             'form' => 'tab 200 mg',
             'restriction_formula' =>'30 tab/bulan.',
             'price' => 8000,
             'description' =>'',
             'faskes1' => '1',
             'faskes2' => '1',
             'faskes3' => '1',
             'photo' => '',
             'category_id'=>1
        ]);

        DB::table('medicines')->insert(
            ['generic_name' => 'ibuprofen',
             'form' => 'tab 400 mg',
             'restriction_formula' =>'30 tab/bulan.',
             'price' => 9500,
             'description' =>'',
             'faskes1' => '1',
             'faskes2' => '1',
             'faskes3' => '1',
             'photo' => '',
             'category_id'=>1
        ]);

        DB::table('medicines')->insert(
            ['generic_name' => 'asam mefenamat',
             'form' => ' susp 100 mg/5 mL',
             'restriction_formula' =>'1 btl/kasus.',
             'price' => 15000,
             'description' =>'',
             'faskes1' => '1',
             'faskes2' => '1',
             'faskes3' => '1',
             'photo' => '',
             'category_id'=>1
        ]);

        DB::table('medicines')->insert(
            ['generic_name' => 'ketoprofen',
             'form' => ' inj 50 mg/mL',
             'restriction_formula' =>'',
             'price' => 22000,
             'description' =>'Untuk nyeri sedang sampai berat pada pasien yang tidak',
             'faskes1' => '1',
             'faskes2' => '1',
             'faskes3' => '1',
             'photo' => '',
             'category_id'=>1
        ]);

        DB::table('medicines')->insert(
            ['generic_name' => 'ketoprofen',
             'form' => 'sup 100 mg',
             'restriction_formula' =>'2 sup/hari, maks 3 hari.',
             'price' => 25000,
             'description' =>'Untuk nyeri sedang sampai berat pada pasien yang tidak',
             'faskes1' => '1',
             'faskes2' => '1',
             'faskes3' => '1',
             'photo' => '',
             'category_id'=>1
        ]);

        //kategori 2
        DB::table('medicines')->insert(
            ['generic_name' => 'alopurinol',
             'form' => 'tab 100 mg',
             'restriction_formula' =>'30tab/bulan',
             'price' => 17500,
             'description' =>'Tidak diberikan pada saat nyeri akut',
             'faskes1' => '1',
             'faskes2' => '1',
             'faskes3' => '1',
             'photo' => '',
             'category_id'=>2
        ]);

        DB::table('medicines')->insert(
            ['generic_name' => 'alopurinol',
             'form' => 'tab 300 mg',
             'restriction_formula' =>'30tab/bulan',
             'price' => 17500,
             'description' =>'Tidak diberikan pada saat nyeri akut',
             'faskes1' => '1',
             'faskes2' => '1',
             'faskes3' => '1',
             'photo' => '',
             'category_id'=>2
        ]);

        DB::table('medicines')->insert(
            ['gener{{ ic_n }}ame' => 'kolkisin',
             'form' => 'tab 500 mcg',
             'restriction_formula' =>'30tab/bulan',
             'price' => 16500,
             'description' =>'Tidak diberikan pada saat nyeri akut',
             'faskes1' => '1',
             'faskes2' => '1',
             'faskes3' => '1',
             'photo' => '',
             'category_id'=>2
        ]);


        //kategori 3
        DB::table('medicines')->insert(
            ['generic_name' => 'bupivakain',
             'form' => 'inj 0,5%',
             'restriction_formula' =>'',
             'price' => 12250,
             'description' =>'',
             'faskes1' => '0',
             'faskes2' => '1',
             'faskes3' => '1',
             'photo' => '',
             'category_id'=>3
        ]);

        DB::table('medicines')->insert(
            ['generic_name' => 'lidokain',
             'form' => 'inj 0,5%',
             'restriction_formula' =>'',
             'price' => 12250,
             'description' =>'',
             'faskes1' => '1',
             'faskes2' => '1',
             'faskes3' => '1',
             'photo' => '',
             'category_id'=>3
        ]);

        DB::table('medicines')->insert(
            ['generic_name' => 'lidokain',
             'form' => 'spray topikal 10%',
             'restriction_formula' =>'',
             'price' => 12250,
             'description' =>'',
             'faskes1' => '1',
             'faskes2' => '1',
             'faskes3' => '1',
             'photo' => '',
             'category_id'=>3
        ]);

        //kategori 4
        DB::table('medicines')->insert(
            ['generic_name' => 'propranolol',
             'form' => 'tab 10 mg',
             'restriction_formula' =>'',
             'price' => 25250,
             'description' =>'',
             'faskes1' => '1',
             'faskes2' => '1',
             'faskes3' => '1',
             'photo' => '',
             'category_id'=>4
        ]);

        //kategori 5
        DB::table('medicines')->insert(
            ['generic_name' => 'betahistin',
             'form' => 'tab 6 mg',
             'restriction_formula' =>'Untuk vertigo perifer:
                - BPPV: 1 minggu.
                - non BPPV: 30 
                tab/bulan',
             'price' => 25250,
             'description' =>'Hanya untuk sindrom 
             meniere atau vertigo perifer.  Untuk sindrom meniere atau
             vertigo non BPPV hanya di 
             Faskes Tk. 2 dan 3',
             'faskes1' => '1',
             'faskes2' => '1',
             'faskes3' => '1',
             'photo' => '',
             'category_id'=>5
        ]);

        DB::table('medicines')->insert(
            ['generic_name' => 'betahistin',
             'form' => 'tab 24 mg',
             'restriction_formula' =>'90 tab/bulan.n',
             'price' => 35000,
             'description' =>'Hanya untuk sindrom 
             meniere atau vertigo perifer.  Untuk sindrom meniere atau
             vertigo non BPPV hanya di 
             Faskes Tk. 2 dan 3. Hanya untuk sindrom meniere',
             'faskes1' => '0',
             'faskes2' => '1',
             'faskes3' => '1',
             'photo' => '',
             'category_id'=>5
        ]);

        // Kategori 6
        DB::table('medicines')->insert(
            ['generic_name' => 'azatioprin',
             'form' => 'tab 50 mg',
             'restriction_formula' =>'',
             'price' => 22000,
             'description' =>'',
             'faskes1' => '0',
             'faskes2' => '0',
             'faskes3' => '1',
             'photo' => '',
             'category_id'=>6
        ]);

        DB::table('medicines')->insert(
            ['generic_name' => 'basiliksimab',
             'form' => 'inj 20 mg',
             'restriction_formula' =>'',
             'price' => 25500,
             'description' =>'Diberikan 20 mg pada 2 jam
             sebelum dilakukan transplantasi, dan 20 mg
             diberikan 4 hari setelah
             transplantasi.',
             'faskes1' => '0',
             'faskes2' => '0',
             'faskes3' => '1',
             'photo' => '',
             'category_id'=>6
        ]);

        DB::table('medicines')->insert(
            ['generic_name' => 'everolimus',
             'form' => 'tab 0,25 mg',
             'restriction_formula' =>'',
             'price' => 7000,
             'description' =>'Hanya untuk pasien yang telah
             menjalani transplantasi ginjal dan
             mengalami penurunan fungsi ginjal
             yang dapat menyebabkan Chronic
             Allograft Nephropathy (CAN).',
             'faskes1' => '0',
             'faskes2' => '0',
             'faskes3' => '1',
             'photo' => '',
             'category_id'=>6
        ]);

        DB::table('medicines')->insert(
            ['generic_name' => 'everolimus',
             'form' => 'tab 0,5 mg',
             'restriction_formula' =>'',
             'price' => 10000,
             'description' =>'Hanya untuk pasien yang telah
             menjalani transplantasi ginjal dan
             mengalami penurunan fungsi ginjal
             yang dapat menyebabkan Chronic
             Allograft Nephropathy (CAN).',
             'faskes1' => '0',
             'faskes2' => '0',
             'faskes3' => '1',
             'photo' => '',
             'category_id'=>6
        ]);

        DB::table('medicines')->insert(
            ['generic_name' => 'hidroksiklorokuin',
             'form' => 'tab 200 mg',
             'restriction_formula' =>'60 tab/bulan.',
             'price' => 13300,
             'description' =>'Untuk kasus SLE (Systemic
             Lupus Erythematosus).',
             'faskes1' => '0',
             'faskes2' => '0',
             'faskes3' => '1',
             'photo' => '',
             'category_id'=>6
        ]);

        DB::table('medicines')->insert(
            ['generic_name' => 'klorokuin',
             'form' => 'tab 250 mg',
             'restriction_formula' =>'',
             'price' => 14300,
             'description' =>'',
             'faskes1' => '0',
             'faskes2' => '0',
             'faskes3' => '1',
             'photo' => '',
             'category_id'=>6
        ]);

        DB::table('medicines')->insert(
            ['generic_name' => 'mikofenolat sodium',
             'form' => 'tab sal 180 mg',
             'restriction_formula' =>'Untuk dewasa: 60
             tab/bulan.',
             'price' => 8000,
             'description' =>'',
             'faskes1' => '0',
             'faskes2' => '0',
             'faskes3' => '1',
             'photo' => '',
             'category_id'=>6
        ]);

        DB::table('medicines')->insert(
            ['generic_name' => 'mikofenolat sodium',
             'form' => '. tab sal 360 mg',
             'restriction_formula' =>'Untuk dewasa: 60
             tab/bulan. Untuk lupus nefritis: 120 tab/bulan',
             'price' => 13300,
             'description' =>'Untuk kasus SLE (Systemic
             Lupus Erythematosus).',
             'faskes1' => '0',
             'faskes2' => '0',
             'faskes3' => '1',
             'photo' => '',
             'category_id'=>6
        ]);

        DB::table('medicines')->insert(
            ['generic_name' => 'hidroksiklorokuin',
             'form' => 'tab 200 mg',
             'restriction_formula' =>'60 tab/bulan.',
             'price' => 13300,
             'description' =>'Untuk kasus SLE (Systemic
             Lupus Erythematosus).',
             'faskes1' => '0',
             'faskes2' => '0',
             'faskes3' => '1',
             'photo' => '',
             'category_id'=>6
        ]);

        DB::table('medicines')->insert(
            ['generic_name' => 'hidroksiklorokuin',
             'form' => 'tab 200 mg',
             'restriction_formula' =>'60 tab/bulan.',
             'price' => 13300,
             'description' =>'Untuk kasus SLE (Systemic
             Lupus Erythematosus).',
             'faskes1' => '0',
             'faskes2' => '0',
             'faskes3' => '1',
             'photo' => '',
             'category_id'=>6
        ]);

        DB::table('medicines')->insert(
            ['generic_name' => 'hidroksiklorokuin',
             'form' => 'tab 200 mg',
             'restriction_formula' =>'60 tab/bulan.',
             'price' => 13300,
             'description' =>'Untuk kasus SLE (Systemic
             Lupus Erythematosus).',
             'faskes1' => '0',
             'faskes2' => '0',
             'faskes3' => '1',
             'photo' => '',
             'category_id'=>6
        ]);

        DB::table('medicines')->insert(
            ['generic_name' => 'hidroksiklorokuin',
             'form' => 'tab 200 mg',
             'restriction_formula' =>'60 tab/bulan.',
             'price' => 13300,
             'description' =>'Untuk kasus SLE (Systemic
             Lupus Erythematosus).',
             'faskes1' => '0',
             'faskes2' => '0',
             'faskes3' => '1',
             'photo' => '',
             'category_id'=>6
        ]);

        DB::table('medicines')->insert(
            ['generic_name' => 'hidroksiklorokuin',
             'form' => 'tab 200 mg',
             'restriction_formula' =>'60 tab/bulan.',
             'price' => 13300,
             'description' =>'Untuk kasus SLE (Systemic
             Lupus Erythematosus).',
             'faskes1' => '0',
             'faskes2' => '0',
             'faskes3' => '1',
             'photo' => '',
             'category_id'=>6
        ]);

        DB::table('medicines')->insert(
            ['generic_name' => 'hidroksiklorokuin',
             'form' => 'tab 200 mg',
             'restriction_formula' =>'60 tab/bulan.',
             'price' => 13300,
             'description' =>'Untuk kasus SLE (Systemic
             Lupus Erythematosus).',
             'faskes1' => '0',
             'faskes2' => '0',
             'faskes3' => '1',
             'photo' => '',
             'category_id'=>6
        ]);

        DB::table('medicines')->insert(
            ['generic_name' => 'hidroksiklorokuin',
             'form' => 'tab 200 mg',
             'restriction_formula' =>'60 tab/bulan.',
             'price' => 13300,
             'description' =>'Untuk kasus SLE (Systemic
             Lupus Erythematosus).',
             'faskes1' => '0',
             'faskes2' => '0',
             'faskes3' => '1',
             'photo' => '',
             'category_id'=>6
        ]);

        #Kategori 7
        DB::table('medicines')->insert(
            ['generic_name' => 'Afatinib',
             'form' => 'tab sal selaput 40 mg',
             'restriction_formula' =>'30 tab/bulan',
             'price' => 100000,
             'description' =>'Untuk NSCLC jenis non squamous yang locally advance atau metastatik dengan EGFR exon 19 delesi atau mutasi subsitusi exon 21 (L858R), pada pasien yang belum pernah mendapatkan TKI sebelumnya.',
             'faskes1' => '0',
             'faskes2' => '0',
             'faskes3' => '1',
             'photo' => '',
             'category_id'=>7
        ]);

        DB::table('medicines')->insert(
            ['generic_name' => 'Bendamustin',
             'form' => 'serb inj 100 mg',
             'restriction_formula' =>'Pemberian maks 6 siklus',
             'price' => 112000,
             'description' =>'Hanya untuk Chronic Lymphocytic Leukimia (CLL) (stadium B atau C).',
             'faskes1' => '0',
             'faskes2' => '0',
             'faskes3' => '1',
             'photo' => '',
             'category_id'=>7
        ]);

        DB::table('medicines')->insert(
            ['generic_name' => 'Bleomisin',
             'form' => 'inj 15 mg',
             'restriction_formula' =>'12x pemebrian',
             'price' => 130000,
             'description' =>'Untuk squamous cell carcinoma pada daerah kepala dan leher, esofagus, serviks, ovarium, penis, testis, kulit, paru, glioma, limfoma, germ cell tumor, dibuktikan dengan hasil pemeriksaan PA.',
             'faskes1' => '0',
             'faskes2' => '0',
             'faskes3' => '1',
             'photo' => '',
             'category_id'=>7
        ]);

        DB::table('medicines')->insert(
            ['generic_name' => 'Dakarbazin',
             'form' => 'inj 100 mg',
             'restriction_formula' =>'12x pemberian',
             'price' => 104000,
             'description' =>'Untuk melanoma malignan metastatik, sarkoma, penyakin Hodgkin.',
             'faskes1' => '0',
             'faskes2' => '0',
             'faskes3' => '1',
             'photo' => '',
             'category_id'=>7
        ]);

        DB::table('medicines')->insert(
            ['generic_name' => 'Hidroksiurea',
             'form' => 'kaps 500 mg',
             'restriction_formula' =>'40 mg/kgBB/hari selama 30 hari',
             'price' => 134000,
             'description' =>'Untuk CML dan polisitemia vera',
             'faskes1' => '0',
             'faskes2' => '0',
             'faskes3' => '1',
             'photo' => '',
             'category_id'=>7
        ]);

        DB::table('medicines')->insert(
            ['generic_name' => 'Nilotinib',
             'form' => 'kaps 150 mg',
             'restriction_formula' =>'120 kaps/bulan/kasus',
             'price' => 160000,
             'description' =>'Hanya diresepkan oleh konsultan hematologi dan onkologi medik (KHOM).',
             'faskes1' => '0',
             'faskes2' => '0',
             'faskes3' => '1',
             'photo' => '',
             'category_id'=>7
        ]);

        // Kategori 8
        DB::table('medicines')->insert(
            ['generic_name' => 'Furosemid',
             'form' => 'tab 40 mg',
             'restriction_formula' =>'30 tab/bulan',
             'price' => 50000,
             'description' =>'',
             'faskes1' => '1',
             'faskes2' => '1',
             'faskes3' => '1',
             'photo' => '',
             'category_id'=>8
        ]);

        DB::table('medicines')->insert(
            ['generic_name' => 'Hidroklorotiazid',
             'form' => 'tab 12,5 mg',
             'restriction_formula' =>'30 tab/bulan',
             'price' => 53000,
             'description' =>'',
             'faskes1' => '0',
             'faskes2' => '1',
             'faskes3' => '1',
             'photo' => '',
             'category_id'=>8
        ]);

        // Kategori 9
        DB::table('medicines')->insert(
            ['generic_name' => 'Silodosin',
             'form' => 'tab 4 mg',
             'restriction_formula' =>'60 tab/bulan',
             'price' => 46000,
             'description' =>'Hanya diberikan pada pasien yang sebelumnya telah mendapat terazosin.',
             'faskes1' => '0',
             'faskes2' => '1',
             'faskes3' => '1',
             'photo' => '',
             'category_id'=>9
        ]);

        DB::table('medicines')->insert(
            ['generic_name' => 'Tamsulosin',
             'form' => 'tab 0,2 mg',
             'restriction_formula' =>'30 tab/bulan',
             'price' => 43500,
             'description' =>'',
             'faskes1' => '0',
             'faskes2' => '1',
             'faskes3' => '1',
             'photo' => '',
             'category_id'=>9
        ]);

        DB::table('medicines')->insert(
            ['generic_name' => 'Terazosin',
             'form' => 'tab 1 mg',
             'restriction_formula' =>'30 tab/bulan',
             'price' => 54000,
             'description' =>'',
             'faskes1' => '0',
             'faskes2' => '1',
             'faskes3' => '1',
             'photo' => '',
             'category_id'=>9
        ]);

        DB::table('medicines')->insert(
            ['generic_name' => 'Doksazosin',
             'form' => 'tab 1 mg',
             'restriction_formula' =>'30 tab/bulan',
             'price' => 42500,
             'description' =>'',
             'faskes1' => '0',
             'faskes2' => '1',
             'faskes3' => '1',
             'photo' => '',
             'category_id'=>9
        ]);

        // Kategori 10
        DB::table('medicines')->insert(
            ['generic_name' => 'Desmopresin',
             'form' => 'tab 0,1 mg',
             'restriction_formula' =>'',
             'price' => 42000,
             'description' =>'',
             'faskes1' => '0',
             'faskes2' => '1',
             'faskes3' => '1',
             'photo' => '',
             'category_id'=>10
        ]);

        DB::table('medicines')->insert(
            ['generic_name' => 'Desmopresin',
             'form' => 'tab 0,2 mg',
             'restriction_formula' =>'',
             'price' => 54000,
             'description' =>'',
             'faskes1' => '0',
             'faskes2' => '1',
             'faskes3' => '1',
             'photo' => '',
             'category_id'=>10
        ]);

        DB::table('medicines')->insert(
            ['generic_name' => 'Desmopresin',
             'form' => 'nasal spray 10 mcg/puff',
             'restriction_formula' =>'3 btl spray/bulan',
             'price' => 73000,
             'description' =>'',
             'faskes1' => '0',
             'faskes2' => '0',
             'faskes3' => '1',
             'photo' => '',
             'category_id'=>10
        ]);

        DB::table('medicines')->insert(
            ['generic_name' => 'Vasopresin',
             'form' => 'inj 20 IU/mL (i.m./s.k.)',
             'restriction_formula' =>'',
             'price' => 63400,
             'description' =>'',
             'faskes1' => '0',
             'faskes2' => '1',
             'faskes3' => '1',
             'photo' => '',
             'category_id'=>10
        ]);

        // Kategori 11
        DB::table('medicines')->insert(
            ['generic_name' => 'Akarbose',
             'form' => 'tab 50 mg',
             'restriction_formula' =>'90 tab/bulan',
             'price' => 65700,
             'description' =>'',
             'faskes1' => '0',
             'faskes2' => '1',
             'faskes3' => '1',
             'photo' => '',
             'category_id'=>11
        ]);

        DB::table('medicines')->insert(
            ['generic_name' => 'Akarbose',
             'form' => 'tab 100 mg',
             'restriction_formula' =>'90 tab/bulan',
             'price' => 76500,
             'description' =>'',
             'faskes1' => '0',
             'faskes2' => '1',
             'faskes3' => '1',
             'photo' => '',
             'category_id'=>11
        ]);

        DB::table('medicines')->insert(
            ['generic_name' => 'Glikuidon',
             'form' => 'tab 30 mg',
             'restriction_formula' =>'90 tab/bulan',
             'price' => 59700,
             'description' =>'',
             'faskes1' => '0',
             'faskes2' => '1',
             'faskes3' => '1',
             'photo' => '',
             'category_id'=>11
        ]);

        DB::table('medicines')->insert(
            ['generic_name' => 'Pioglitazon',
             'form' => 'tab 15 mg',
             'restriction_formula' =>'30 tab/bulan',
             'price' => 74200,
             'description' =>'Tidak diberikan pada pasien dengan gagal jantung dan/atau riwayat keluarga bladder cancer.',
             'faskes1' => '0',
             'faskes2' => '1',
             'faskes3' => '1',
             'photo' => '',
             'category_id'=>11
        ]);

        DB::table('medicines')->insert(
            ['generic_name' => 'Pioglitazon',
             'form' => 'tab 30 mg',
             'restriction_formula' =>'30 tab/bulan',
             'price' => 74200,
             'description' =>'Tidak diberikan pada pasien dengan gagal jantung dan/atau riwayat keluarga bladder cancer.',
             'faskes1' => '0',
             'faskes2' => '1',
             'faskes3' => '1',
             'photo' => '',
             'category_id'=>11
        ]);

        DB::table('medicines')->insert(
            ['generic_name' => 'Vildagliptin',
             'form' => 'tab 50 mg',
             'restriction_formula' =>'60 tab/bulan',
             'price' => 76900,
             'description' =>'Tidak digunakan sebagai lini pertama/terapi inisial. Sebagai terapi tambahan pada metformin dan/atau sulfonilurea dengan dosis optimal yang masih dapat ditoleransi oleh pasien.',
             'faskes1' => '0',
             'faskes2' => '1',
             'faskes3' => '1',
             'photo' => '',
             'category_id'=>11
        ]);

        // Kategori 12
        DB::table('medicines')->insert(
            ['generic_name' => 'Alteplase',
             'form' => 'serb inj 15 mg',
             'restriction_formula' =>'',
             'price' => 76200,
             'description' =>'Kontraindikasi: tidak digunakan untuk stroke iskemik dengan riwayat pendarahan intrakranial dan cedera kepala berat dalam waktu 3 bulan terakhir, riwayat gangguan koagulasi, hipertensi yang tidak terkendali.',
             'faskes1' => '0',
             'faskes2' => '1',
             'faskes3' => '1',
             'photo' => '',
             'category_id'=>12
        ]);

        DB::table('medicines')->insert(
            ['generic_name' => 'Streptokinase',
             'form' => 'inj 1,5 juta IU',
             'restriction_formula' =>'',
             'price' => 83400,
             'description' =>'Kontraindikasi: tidak boleh diberikan jika ditemukan kontraindikasi fibrinolitik antara lain: riwayat stroke hemoragik atau riwayat stroke iskemik dalam 6 bulan terakhir, AVM, tumor otak, trauma kepala, pendarahan aktif gastrointestinal, pasca operasi besar dalam 3 bulan, dan diseksi aorta.',
             'faskes1' => '0',
             'faskes2' => '1',
             'faskes3' => '1',
             'photo' => '',
             'category_id'=>12
        ]);

        // Kategori 13
        DB::table('medicines')->insert(
            ['generic_name' => 'Atorvastatin',
             'form' => 'tab sal selaput 10 mg',
             'restriction_formula' =>'30 tab/bulan',
             'price' => 85200,
             'description' =>'Pasien ASCVD (post PCI, CABG, stroke iskemi dan/atau PAD, pascainfark) yang dibuktikan dengan EKG atau MSCT atau riwayat angiografi. Target LDL adalah <= 70 mg/dL, yang harus diperiksa setiap 6 bulan.',
             'faskes1' => '0',
             'faskes2' => '1',
             'faskes3' => '1',
             'photo' => '',
             'category_id'=>13
        ]);

        DB::table('medicines')->insert(
            ['generic_name' => 'Atorvastatin',
             'form' => 'tab sal selaput 20 mg',
             'restriction_formula' =>'30 tab/bulan',
             'price' => 89000,
             'description' =>'Pasien ASCVD (post PCI, CABG, stroke iskemi dan/atau PAD, pascainfark) yang dibuktikan dengan EKG atau MSCT atau riwayat angiografi. Target LDL adalah <= 70 mg/dL, yang harus diperiksa setiap 6 bulan.',
             'faskes1' => '0',
             'faskes2' => '1',
             'faskes3' => '1',
             'photo' => '',
             'category_id'=>13
        ]);

        DB::table('medicines')->insert(
            ['generic_name' => 'Gemfibrozil',
             'form' => 'kapl 300 mg',
             'restriction_formula' =>'30 kapl/bulan',
             'price' => 77900,
             'description' =>'Hanya untuk hipertrigliseridemia. Tidak dianjurkan diberikan bersama statin',
             'faskes1' => '0',
             'faskes2' => '1',
             'faskes3' => '1',
             'photo' => '',
             'category_id'=>13
        ]);

        // Kategori 14
        DB::table('medicines')->insert(
            ['generic_name' => 'Klotrimazol',
             'form' => 'tab vaginal 100 mg',
             'restriction_formula' =>'',
             'price' => 99900,
             'description' =>'',
             'faskes1' => '0',
             'faskes2' => '1',
             'faskes3' => '1',
             'photo' => '',
             'category_id'=>14
        ]);

        DB::table('medicines')->insert(
            ['generic_name' => 'Mikonazol',
             'form' => 'Krim 2%',
             'restriction_formula' =>'',
             'price' => 103500,
             'description' =>'',
             'faskes1' => '1',
             'faskes2' => '1',
             'faskes3' => '1',
             'photo' => '',
             'category_id'=>14
        ]);

        // Kategori 15
        DB::table('medicines')->insert(
            ['generic_name' => 'Maprotilin',
             'form' => 'tab sal selaput 50 mg',
             'restriction_formula' =>'30 tab/bulan',
             'price' => 86200,
             'description' =>'',
             'faskes1' => '0',
             'faskes2' => '1',
             'faskes3' => '1',
             'photo' => '',
             'category_id'=>15
        ]);

        DB::table('medicines')->insert(
            ['generic_name' => 'Sertralin',
             'form' => 'tab sal selaput 50 mg',
             'restriction_formula' =>'30 tab/bulan',
             'price' => 103500,
             'description' =>'',
             'faskes1' => '0',
             'faskes2' => '1',
             'faskes3' => '1',
             'photo' => '',
             'category_id'=>15
        ]);




    }
}
