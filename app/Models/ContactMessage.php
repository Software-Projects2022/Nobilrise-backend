<?php
//  ┌─────────────────────────────────────────────────────────────┐
//  │ ContactMessage::all()            → جيب كل الرسائل          │
//  │ ContactMessage::find(5)          → جيب الرسالة رقم 5       │
//  │ ContactMessage::create([...])    → انشئ رسالة جديدة         │
//  │ $msg->update(['status'=>'read']) → عدّل رسالة موجودة        │
//  │ $msg->delete()                   → احذف رسالة               │
//  └─────────────────────────────────────────────────────────────┘
// ══════════════════════════════════════════════════════════════════

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ContactMessage extends Model
{
    // HasFactory → بيخلي الـ Model يشتغل مع الـ Factory
    // Factory = بيولد بيانات وهمية للتجربة (مش مطلوب دلوقتي)
    use HasFactory;

    // ─── $table ─────────────────────────────────────────────────────
    // بنحدد اسم الجدول في قاعدة البيانات
    // لو حذفته، Laravel هيفترض إن الجدول اسمه "contact_messages"
    // (الـ Model بالإنجليزي + s في الآخر بشكل تلقائي)
    protected $table = 'contact_messages';


    // ─── $fillable ──────────────────────────────────────────────────
    // قائمة الحقول اللي مسموح تتملى بـ mass assignment
    // Mass Assignment = لما بتعمل create([...]) أو fill([...])
    //
    // مثال:
    //   ContactMessage::create($request->all())  ← ده mass assignment
    //
    // الحقول اللي مش موجودة هنا هيتجاهلها Laravel
    // ده حماية أمنية - مثلاً "status" و"admin_notes" مش هيتملوا
    // من الفورم مباشرةً حتى لو المستخدم بعت قيم ليهم
    protected $fillable = [
        'first_name',   // الاسم الأول
        'last_name',    // الاسم الأخير
        'email',        // البريد الإلكتروني
        'phone',        // الهاتف
        'topic',        // موضوع التواصل
        'service',      // الخدمة المعنية
        'message',      // نص الرسالة
        'rating',       // التقييم
        'status',       // الحالة
        'admin_notes',  // ملاحظات الأدمن
    ];


    // ─── $casts ─────────────────────────────────────────────────────
    // بيحول نوع البيانات تلقائياً لما تجيبها من قاعدة البيانات
    // مثلاً قاعدة البيانات بتحفظ الأرقام كـ string أحياناً
    // $casts بيقول لـ Laravel "حوّل rating لـ integer تلقائياً"
    protected $casts = [
        'rating' => 'integer', // تأكد إن التقييم دايماً رقم مش نص
    ];


    // ══════════════════════════════════════════════════════════════
    //  Accessors
    //  ──────────
    //  حقول وهمية بتحسبها من حقول موجودة
    //  بتوصلها كأنها عمود في الجدول: $msg->full_name
    // ══════════════════════════════════════════════════════════════

    // getXxxAttribute() → Laravel بيعرف دي Accessor
    // full_name مش عمود في الجدول، بس بنحسبه من first_name + last_name
    public function getFullNameAttribute(): string
    {
        return "{$this->first_name} {$this->last_name}";
        // مثال: "محمد أحمد"
    }


    // ══════════════════════════════════════════════════════════════
    //  Scopes
    //  ───────
    //  فلاتر جاهزة تقدر تستخدمها في أي استعلام
    //  مثال: ContactMessage::new()->get()
    //        بدل:  ContactMessage::where('status', 'new')->get()
    // ══════════════════════════════════════════════════════════════

    // scopeXxx() → Laravel بيعرف دي Scope
    // الاسم بيبدأ بـ scope لكن لما بتستخدمه بتشيل كلمة scope
    // ContactMessage::new()    ← صح ✓
    // ContactMessage::scopeNew() ← غلط ✗
    public function scopeNew($query)
    {
        // where('status', 'new') = فلتر الرسائل الجديدة بس
        return $query->where('status', 'new');
    }

    // Scope بيقبل parameter
    // مثال الاستخدام: ContactMessage::byStatus('replied')->get()
    public function scopeByStatus($query, string $status)
    {
        return $query->where('status', $status);
    }


    // ══════════════════════════════════════════════════════════════
    //  Helper Methods (Static)
    //  ────────────────────────
    //  دوال ثابتة بترجع بيانات مساعدة
    //  static = تقدر تستدعيها بدون ما تعمل object
    //  مثال: ContactMessage::topics()
    // ══════════════════════════════════════════════════════════════

    // بترجع قائمة الموضوعات المتاحة للفورم
    // بنحطها هنا مش في الـ Controller عشان:
    // - مركزية التعديل (لو ضفت موضوع جديد، مش محتاج تدور عليه في أماكن كتير)
    // - الـ Filament Resource ممكن يستخدمها
    // - الـ Validation ممكن تستخدمها
    public static function topics(): array
    {
        return [
            'استفسار عام',
            'حجز دورة',
            'حجز جلسة',
            'دعم فني',
            'شكوى',
            'اقتراح',
        ];
    }

    // بترجع قائمة الخدمات المتاحة
    public static function services(): array
    {
        return [
            'الدورات التدريبية',
            'الجلسات النفسية الفردية',
            'الجلسات الجماعية',
            'الاستشارات أونلاين',
            'أخرى',
        ];
    }

    // بترجع حالات الرسالة مع ترجمتها العربية
    // key = القيمة المحفوظة في DB
    // value = النص اللي بيتعرض للمستخدم
    public static function statuses(): array
    {
        return [
            'new'     => 'جديد',
            'read'    => 'مقروء',
            'replied' => 'تم الرد',
            'closed'  => 'مغلق',
        ];
    }
}
