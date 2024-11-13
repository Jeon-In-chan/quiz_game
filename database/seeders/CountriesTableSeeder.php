<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Insert Countries data
        $countries = [
            ['country_name' => '미국', 'capital_name' => '워싱턴 D.C.'],
            ['country_name' => '중국', 'capital_name' => '베이징'],
            ['country_name' => '일본', 'capital_name' => '도쿄'],
            ['country_name' => '독일', 'capital_name' => '베를린'],
            ['country_name' => '인도', 'capital_name' => '뉴델리'],
            ['country_name' => '영국', 'capital_name' => '런던'],
            ['country_name' => '프랑스', 'capital_name' => '파리'],
            ['country_name' => '이탈리아', 'capital_name' => '로마'],
            ['country_name' => '캐나다', 'capital_name' => '오타와'],
            ['country_name' => '대한민국', 'capital_name' => '서울'],
            ['country_name' => '러시아', 'capital_name' => '모스크바'],
            ['country_name' => '브라질', 'capital_name' => '브라질리아'],
            ['country_name' => '호주', 'capital_name' => '캔버라'],
            ['country_name' => '스페인', 'capital_name' => '마드리드'],
            ['country_name' => '멕시코', 'capital_name' => '멕시코시티'],
            ['country_name' => '인도네시아', 'capital_name' => '자카르타'],
            ['country_name' => '사우디아라비아', 'capital_name' => '리야드'],
            ['country_name' => '터키', 'capital_name' => '앙카라'],
            ['country_name' => '네덜란드', 'capital_name' => '암스테르담'],
            ['country_name' => '스위스', 'capital_name' => '베른'],
            ['country_name' => '아랍에미리트', 'capital_name' => '아부다비'],
            ['country_name' => '아르헨티나', 'capital_name' => '부에노스아이레스'],
            ['country_name' => '벨기에', 'capital_name' => '브뤼셀'],
            ['country_name' => '스웨덴', 'capital_name' => '스톡홀름'],
            ['country_name' => '나이지리아', 'capital_name' => '아부자'],
            ['country_name' => '이스라엘', 'capital_name' => '예루살렘'],
            ['country_name' => '폴란드', 'capital_name' => '바르샤바'],
            ['country_name' => '노르웨이', 'capital_name' => '오슬로'],
            ['country_name' => '이집트', 'capital_name' => '카이로'],
            ['country_name' => '필리핀', 'capital_name' => '마닐라'],
            ['country_name' => '오스트리아', 'capital_name' => '빈'],
            ['country_name' => '태국', 'capital_name' => '방콕'],
            ['country_name' => '남아프리카공화국', 'capital_name' => '프리토리아'],
            ['country_name' => '말레이시아', 'capital_name' => '쿠알라룸푸르'],
            ['country_name' => '싱가포르', 'capital_name' => '싱가포르'],
            ['country_name' => '방글라데시', 'capital_name' => '다카'],
            ['country_name' => '덴마크', 'capital_name' => '코펜하겐'],
            ['country_name' => '콜롬비아', 'capital_name' => '보고타'],
            ['country_name' => '베트남', 'capital_name' => '하노이'],
            ['country_name' => '이라크', 'capital_name' => '바그다드'],
            ['country_name' => '칠레', 'capital_name' => '산티아고'],
            ['country_name' => '핀란드', 'capital_name' => '헬싱키'],
            ['country_name' => '체코', 'capital_name' => '프라하'],
            ['country_name' => '포르투갈', 'capital_name' => '리스본'],
            ['country_name' => '페루', 'capital_name' => '리마'],
            ['country_name' => '그리스', 'capital_name' => '아테네'],
            ['country_name' => '카타르', 'capital_name' => '도하'],
            ['country_name' => '뉴질랜드', 'capital_name' => '웰링턴'],
            ['country_name' => '루마니아', 'capital_name' => '부쿠레슈티'],
            ['country_name' => '헝가리', 'capital_name' => '부다페스트'],
            ['country_name' => '카자흐스탄', 'capital_name' => '누르술탄'],
            ['country_name' => '쿠웨이트', 'capital_name' => '쿠웨이트 시티'],
            ['country_name' => '우즈베키스탄', 'capital_name' => '타슈켄트'],
            ['country_name' => '우크라이나', 'capital_name' => '키이우'],
            ['country_name' => '모로코', 'capital_name' => '라바트'],
            ['country_name' => '슬로바키아', 'capital_name' => '브라티슬라바'],
            ['country_name' => '에콰도르', 'capital_name' => '키토'],
            ['country_name' => '스리랑카', 'capital_name' => '콜롬보'],
            ['country_name' => '에티오피아', 'capital_name' => '아디스아바바'],
            ['country_name' => '케냐', 'capital_name' => '나이로비'],
            ['country_name' => '오만', 'capital_name' => '무스카트'],
            ['country_name' => '벨라루스', 'capital_name' => '민스크'],
            ['country_name' => '앙골라', 'capital_name' => '루안다'],
            ['country_name' => '미얀마', 'capital_name' => '네피도'],
            ['country_name' => '불가리아', 'capital_name' => '소피아'],
            ['country_name' => '코트디부아르', 'capital_name' => '야무수크로'],
            ['country_name' => '리투아니아', 'capital_name' => '빌뉴스'],
            ['country_name' => '튀니지', 'capital_name' => '튀니스'],
            ['country_name' => '가나', 'capital_name' => '아크라'],
            ['country_name' => '요르단', 'capital_name' => '암만'],
            ['country_name' => '볼리비아', 'capital_name' => '수크레'],
            ['country_name' => '터키메니스탄', 'capital_name' => '아시가바트'],
            ['country_name' => '콩고민주공화국', 'capital_name' => '킨샤사'],
            ['country_name' => '우루과이', 'capital_name' => '몬테비데오'],
            ['country_name' => '크로아티아', 'capital_name' => '자그레브'],
            ['country_name' => '파라과이', 'capital_name' => '아순시온'],
            ['country_name' => '레바논', 'capital_name' => '베이루트'],
            ['country_name' => '슬로베니아', 'capital_name' => '류블랴나'],
            ['country_name' => '에스토니아', 'capital_name' => '탈린'],
            ['country_name' => '라트비아', 'capital_name' => '리가'],
            ['country_name' => '세르비아', 'capital_name' => '베오그라드'],
            ['country_name' => '바레인', 'capital_name' => '마나마'],
            ['country_name' => '트리니다드 토바고', 'capital_name' => '포트오브스페인'],
            ['country_name' => '알제리', 'capital_name' => '알제'],
            ['country_name' => '북한', 'capital_name' => '평양'],
            ['country_name' => '잠비아', 'capital_name' => '루사카'],
            ['country_name' => '나미비아', 'capital_name' => '빈트후크'],
            ['country_name' => '보츠와나', 'capital_name' => '가보로네'],
            ['country_name' => '아제르바이잔', 'capital_name' => '바쿠'],
            ['country_name' => '이슬란드', 'capital_name' => '레이캬비크'],
            ['country_name' => '바하마', 'capital_name' => '나소'],
            ['country_name' => '알바니아', 'capital_name' => '티라나'],
            ['country_name' => '룩셈부르크', 'capital_name' => '룩셈부르크'],
            ['country_name' => '아르메니아', 'capital_name' => '예레반'],
            ['country_name' => '몬테네그로', 'capital_name' => '포드고리차'],
            ['country_name' => '조지아', 'capital_name' => '트빌리시'],
            ['country_name' => '몰도바', 'capital_name' => '키시너우'],
            ['country_name' => '몰타', 'capital_name' => '발레타'],
            ['country_name' => '브루나이', 'capital_name' => '반다르스리브가완'],
            ['country_name' => '키프로스', 'capital_name' => '니코시아'],
        ];

        //DB::table('countries')->truncate(); 데이터 초기화 후 다시 작성

        DB::table('countries')->insert($countries);
    }
}
