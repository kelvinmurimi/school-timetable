namespace App\Http\Livewire\Admin\Subjects;

use Livewire\Component;
use App\Models\Subject;

class CreateSubject extends Component
{
    public $name;
    public $code;

    public function submit()
    {
        // Validation and storage logic
        $this->validate([
            'name' => 'required|string|max:255',
            'code' => 'required|string|max:10',
        ]);

        Subject::create([
            'name' => $this->name,
            'code' => $this->code,
        ]);

        // Optionally reset fields or redirect
    }

    public function render()
    {
        return view('livewire.admin.subjects.create-subject');
    }
}
