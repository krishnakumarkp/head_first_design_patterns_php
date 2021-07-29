<?PHP
namespace FlyBehaviours;

use FlyBehaviour;

class FlyWithWings implements FlyBehaviour {
    public function fly() {
        echo "I am flying with wings! \n";
    }
}