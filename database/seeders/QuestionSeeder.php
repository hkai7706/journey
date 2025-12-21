<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Question;

class QuestionSeeder extends Seeder
{
    public function run(): void
    {
        $questions = [
            // Love Knowledge Category (15 questions)
            [
                'question' => ' ပထမဆုံး စကားစပြောတဲ့နေ့ကဘယ်နေ့လဲ?',
                'category' => 'Love Knowledge',
                'options' => ['Jan 3', 'Jan 1', 'Jan 5', 'Jan 4'],
                'correct_answer' => 0,
            ],
            [
                'question' => 'ကိုကိုအကြိုက်ဆုံးသီချင်းဘယ်ဟာလဲ?',
                'category' => 'Love Knowledge',
                'options' => ['အပေါ်ယံများ', 'Yitt', 'Sweet mistake', 'Kill this love'],
                'correct_answer' => 3,
            ],
            [
                'question' => 'ပထမဆုံး dateတဲ့ရက်ကဘယ်နေ့လဲ?',
                'category' => 'Love Knowledge',
                'options' => ['Jan 18', 'Jan 25', 'Feb 6', 'Jan 30'],
                'correct_answer' => 3,
            ],
            [
                'question' => 'ပထမဆုံးအတူတူကားစီးပြီးသွားခဲ့တဲ့နေရာကဘယ်မှာလဲ?',
                'category' => 'Love Knowledge',
                'options' => ['ကော်ဖီဆိုင်', 'လက်ဖက်ရည်ဆိုင်','အရက်ဆိုင်', '‌ဟော်တယ်'],
                'correct_answer' => 0,
            ],
            [
                'question' => 'ပထမဆုံးပေးတဲ့လက်ဆောင် ဘာလဲ?',
                'category' => 'Love Knowledge',
                'options' => ['အရုပ်', 'လက်စွပ်', 'မုန့်', 'ပန်းစည်း'],
                'correct_answer' => 3,
            ],
            [
                'question' => 'ချစ်တာနဲ့ ကြိုက်တာ ဘယ်လို ခြားနားသလဲ?',
                'category' => 'Love Knowledge',
                'options' => ['တူတယ်', 'လုံးဝ မတူဘူး', 'ချစ်တာက ပို နက်တယ်', 'မသိဘူး'],
                'correct_answer' => 2,
            ],
            [
                'question' => 'အချစ်ရဲ့ အရေးကြီးဆုံး အရာက ဘာလဲ?',
                'category' => 'Love Knowledge',
                'options' => ['ယုံကြည်မှု', 'နားလည်မှု', 'ဂရုစိုက်မှု', 'အားလုံး'],
                'correct_answer' => 3,
            ],
            [
                'question' => 'ကိုကို့ကို ပထမဆုံး မြင်တဲ့အခါ ဘယ်လိုထင်ခဲ့သလဲ?',
                'category' => 'Love Knowledge',
                'options' => ['ချစ်စရာကောင်းတယ်', 'စိတ်ဝင်စားစရာ', 'ရွှင်လန်းတယ်', 'ထူးဆန်းတယ်'],
                'correct_answer' => 0,
            ],
            [
                'question' => 'ကိုကို့ကို အကြိုက်ဆုံး အရာက ဘာလဲ?',
                'category' => 'Love Knowledge',
                'options' => ['အပြုံး', 'စရိုက်', 'သဘောထား', 'အကုန်လုံး'],
                'correct_answer' => 3,
            ],
            [
                'question' => ' အိမ်မှာဆိုရင်ကိုကိုဘာလုပ်တက်သလဲ?',
                'category' => 'Love Knowledge',
                'options' => ['သန့်ရှင်းရေးလုပ်တာ', 'ရုပ်ရှင်ကြည့်ခြင်း', 'ဂိမ်းကစားခြင်း', 'အိပ်တာ'],
                'correct_answer' => 3,
            ],
            [
                'question' => 'ကိုကိုရဲံ အိပ်မက်ကို သိလား?',
                'category' => 'Love Knowledge',
                'options' => ['Pilot', 'Engineer', 'စစ်သားကြီးး', 'Doctor'],
                'correct_answer' => 0,
            ],
            [
                'question' => 'ကိုကိုတို့ အတူ သွားချင်တဲ့ နေရာက ဘယ်မှာလဲ?',
                'category' => 'Love Knowledge',
                'options' => ['Paris', 'Hawaii', 'Thai', 'SwithzerLand'],
                'correct_answer' => 3,
            ],
            [
                'question' => 'ကိုကို့ကို ဘာလို့ ချစ်တာလဲ?',
                'category' => 'Love Knowledge',
                'options' => ['ကောင်းလို့', 'ချစ်စရာ ကောင်းလို့', 'နားလည်ပေးလို့', 'အားလုံး'],
                'correct_answer' => 3,
            ],
            [
                'question' => 'ကိုကို့အပေါ် အဆိုးဆုံး အကျင့်က ဘာလဲ?',
                'category' => 'Love Knowledge',
                'options' => ['စိတ်တိုတာ', 'ငြီးငွေ့တာ', 'မာနကြီးတာ', 'စိတ်မရှည်တာ'],
                'correct_answer' => 3,
            ],
            [
                'question' => 'ကိုကိုတို့ အတူ အနာဂတ် ဘယ်လို မြင်လဲ?',
                'category' => 'Love Knowledge',
                'options' => ['လင်မယား ဖြစ်မယ်', 'ပျော်ရွှင် နေမယ်', 'အတူသာသာယာယာနေမယ်', 'လင်မယား ဖြစ်ပြီး ကလေးများ ရှိမယ်'],
                'correct_answer' => 3,
            ],


            // Relationship Behavior Category (15 questions)
            [
                'question' => 'စိတ်ဆိုးတဲ့အခါ ဘယ်လို ပြန်ကောင်းအောင် လုပ်မလဲ?',
                'category' => 'Relationship Behavior',
                'options' => ['တိတ်ဆိတ် နေမယ်', 'ပြောပြီး ဖြေရှင်းမယ်', 'အချိန်ပေးမယ်', 'ဆောရီးပြောမယ်'],
                'correct_answer' => 1,
            ],
            [
                'question' => 'ငါ စိတ်ညစ်နေရင် မင်း ဘာလုပ်ပေးမလဲ?',
                'category' => 'Relationship Behavior',
                'options' => ['နားထောင်ပေးမယ်', 'ဖက်ထားပေးမယ်', 'တိတ်တိတ် နေမယ်', 'ရယ်ရွှင်အောင် လုပ်မယ်'],
                'correct_answer' => 0,
            ],
            [
                'question' => 'အငြင်းပွားတဲ့အခါ ဘယ်လို ဖြေရှင်းမလဲ?',
                'category' => 'Relationship Behavior',
                'options' => ['ငါ့အမှား ဝန်ခံမယ်', 'မင်းအမှား ထောက်ပြမယ်', 'နှစ်ယောက် ပြောဆိုမယ်', 'အေးအေးဆေးဆေး ထားမယ်'],
                'correct_answer' => 2,
            ],
            [
                'question' => 'ငါ မင်းကို လိမ်ရင် ဘယ်လို ခံစားရမလဲ?',
                'category' => 'Relationship Behavior',
                'options' => ['စိတ်ဆိုးမယ်', 'ဝမ်းနည်းမယ်', 'စိတ်ပျက်မယ်', 'အားလုံး'],
                'correct_answer' => 3,
            ],
            [
                'question' => 'ငါတို့ ဘယ်လောက် မကြာခဏ ဆက်သွယ်သင့်သလဲ?',
                'category' => 'Relationship Behavior',
                'options' => ['တစ်နာရီ တစ်ခါ', 'တစ်ရက် တစ်ခါ', 'အခါခါ', 'လိုအပ်သလို'],
                'correct_answer' => 3,
            ],
            [
                'question' => 'ငါ့ရဲ့ မိတ်ဆွေတွေကို မင်း ဘယ်လို ဆက်ဆံမလဲ?',
                'category' => 'Relationship Behavior',
                'options' => ['ကောင်းကောင်း ဆက်ဆံမယ်', 'ထိန်းချုပ်မယ်', 'ရှောင်မယ်', 'မသိဘူး'],
                'correct_answer' => 0,
            ],
            [
                'question' => 'မင်း တခြား မိန်းကလေးနဲ့ ပြောနေရင် ငါ ဘာလုပ်မလဲ?',
                'category' => 'Relationship Behavior',
                'options' => ['ယုံကြည်မယ်', 'မေးမယ်', 'စိတ်ဆိုးမယ်', 'မေ့သွားမယ်'],
                'correct_answer' => 0,
            ],
            [
                'question' => 'ချစ်သူရဲ့ ဖုန်း ကြည့်ချင်လား?',
                'category' => 'Relationship Behavior',
                'options' => ['ကြည့်ချင်တယ်', 'မကြည့်ချင်ဘူး', 'ယုံကြည်မှု ရှိတယ်', 'လိုက်မသိဘူး'],
                'correct_answer' => 2,
            ],
            [
                'question' => 'ငါ့ကို အချိန်မပေးနိုင်ရင် ဘယ်လို ခံစားရမလဲ?',
                'category' => 'Relationship Behavior',
                'options' => ['နားလည်မယ်', 'စိတ်ဆိုးမယ်', 'ဝမ်းနည်းမယ်', 'ပြောပြီး ဖြေရှင်းမယ်'],
                'correct_answer' => 3,
            ],
            [
                'question' => 'မင်းရဲ့ မိသားစု ငါ့ကို မကြိုက်ရင် ဘာလုပ်မလဲ?',
                'category' => 'Relationship Behavior',
                'options' => ['စွန့်လွှတ်မယ်', 'တိုင်ပင်မယ်', 'ငါ့ဘက်က ကာကွယ်မယ်', 'ပြောင်းဖို့ ကြိုးစားမယ်'],
                'correct_answer' => 2,
            ],
            [
                'question' => 'ငါ အလုပ်နဲ့ မအီမသာ ဖြစ်နေရင် မင်း ဘာလုပ်မလဲ?',
                'category' => 'Relationship Behavior',
                'options' => ['အားပေးမယ်', 'တိုင်ပင်မယ်', 'နားထောင်မယ်', 'အားလုံး လုပ်မယ်'],
                'correct_answer' => 3,
            ],
            [
                'question' => 'ငါတို့ သဘောထား မတူရင် ဘယ်လို လုပ်မလဲ?',
                'category' => 'Relationship Behavior',
                'options' => ['ငါ့ဘက်က လိုက်ပေးမယ်', 'မင်းဘက်က လိုက်မယ်', 'အလယ် ရှာမယ်', 'ပြောပြီး ဆုံးဖြတ်မယ်'],
                'correct_answer' => 3,
            ],
            [
                'question' => 'ငါ တစ်ခုခု လိုချင်တယ်လို့ ပြောရင် မင်း ဘာလုပ်မလဲ?',
                'category' => 'Relationship Behavior',
                'options' => ['ချက်ချင်း ဝယ်ပေးမယ်', 'စဉ်းစားမယ်', 'အကြောင်းကြားချက် သိချင်တယ်', 'ကြိုးစားပေးမယ်'],
                'correct_answer' => 3,
            ],
            [
                'question' => 'မင်း အလုပ်ရှုပ်နေရင် ငါ ဘယ်လို လုပ်သင့်သလဲ?',
                'category' => 'Relationship Behavior',
                'options' => ['နားလည်ပေးမယ်', 'အချိန်ပေးမယ်', 'အားပေးမယ်', 'အားလုံး'],
                'correct_answer' => 3,
            ],
            [
                'question' => 'ပြဿနာ ကြီးကြီး ရှိရင် ဘယ်သူ့ကို အရင် ပြောမလဲ?',
                'category' => 'Relationship Behavior',
                'options' => ['မိဘ', 'မိတ်ဆွေ', 'ချစ်သူ', 'ကိုယ်တိုင် ဖြေရှင်းမယ်'],
                'correct_answer' => 2,
            ],

            // Life Choices Category (10 questions)
            [
                'question' => 'အိမ်ထောင် ဘယ်အရွယ်မှာ ပြုချင်သလဲ?',
                'category' => 'Life Choices',
                'options' => ['၂၀ ကျော်', '၂၅ ကျော်', '၃၀ ကျော်', 'အဆင်သင့်ဖြစ်မှ'],
                'correct_answer' => 3,
            ],
            [
                'question' => 'အနာဂတ်မှာ ကလေး ဘယ်နှစ်ယောက် လိုချင်သလဲ?',
                'category' => 'Life Choices',
                'options' => ['၁ ယောက်', '၂ ယောက်', '၃+ ယောက်', 'နောက်မှ စဉ်းစားမယ်'],
                'correct_answer' => 3,
            ],
            [
                'question' => 'မိဘတွေနဲ့ အတူ နေချင်လား?',
                'category' => 'Life Choices',
                'options' => ['နေချင်တယ်', 'မနေချင်ဘူး', 'ခဏခဏ လည်ပတ်မယ်', 'အခြေအနေပေါ်'],
                'correct_answer' => 3,
            ],
            [
                'question' => 'ငါတို့ အတူ အလုပ်တူ လုပ်ရင် ဘယ်လိုလဲ?',
                'category' => 'Life Choices',
                'options' => ['ကောင်းမယ်', 'ခက်မယ်', 'အဆင်ပြေမယ်', 'မှတ်မိမယ်'],
                'correct_answer' => 2,
            ],
            [
                'question' => 'ငွေကြေး စီမံခန့်ခွဲမှု ဘယ်သူ လုပ်မလဲ?',
                'category' => 'Life Choices',
                'options' => ['ငါ', 'မင်း', 'အတူတူ', 'အကောင်းဆုံး လူ'],
                'correct_answer' => 2,
            ],
            [
                'question' => 'အိမ်က အလုပ် ဘယ်သူ ပိုလုပ်မလဲ?',
                'category' => 'Life Choices',
                'options' => ['ငါ', 'မင်း', 'အညီအမျှ', 'လုပ်ချင်သူ'],
                'correct_answer' => 2,
            ],
            [
                'question' => 'နိုင်ငံခြား အလုပ် ရရင် သွားမလား?',
                'category' => 'Life Choices',
                'options' => ['သွားမယ်', 'မသွားဘူး', 'အတူသွားမှ', 'တိုင်ပင်မယ်'],
                'correct_answer' => 3,
            ],
            [
                'question' => 'ငါ ကျောင်း ဆက်တက်ချင်ရင် မင်း ထောက်ခံမလား?',
                'category' => 'Life Choices',
                'options' => ['ထောက်ခံမယ်', 'မထောက်ခံဘူး', 'စဉ်းစားမယ်', 'အကူအညီ ပေးမယ်'],
                'correct_answer' => 3,
            ],
            [
                'question' => 'မိသားစု အစည်းအဝေး ဘယ်လောက် အရေးကြီးသလဲ?',
                'category' => 'Life Choices',
                'options' => ['အရမ်း အရေးကြီးတယ်', 'အတန်အသင့်', 'သိပ်မအရေးကြီးဘူး', 'အခြေအနေ ပေါ်'],
                'correct_answer' => 0,
            ],
            [
                'question' => 'ငါတို့ အိပ်မက် အကောင်အထည်ဖော်ဖို့ ဘယ်လို ကူညီမလဲ?',
                'category' => 'Life Choices',
                'options' => ['အားပေးမယ်', 'အတူ စီစဉ်မယ်', 'ကူညီမယ်', 'အကုန် လုပ်မယ်'],
                'correct_answer' => 3,
            ],
        ];

        foreach ($questions as $question) {
            Question::create($question);
        }
    }
}