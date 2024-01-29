# DosRelojes
Resolution of an PHP programming excercise

### Exercise statement
```
Los 2 Relojes
Supongamos que tenemos dos relojes, cada número se representa por alguna combinacion de 7 leds.
Teniendo en cuenta que:

El reloj solo gasta energía al prender cada led.
Prender un led tiene un gasto energético de un microwatt
Y que en cada segundo:

En un Reloj Estándar

Cada vez que se quiere representar una hora distinta del reloj, se apagan por completo todos los leds, de todos los números y se encienden los leds correspondientes al siguiente horario.

En un Reloj Premium

Cada vez que se quiera representar una hora distinta, solamente se van a apagar y prender los leds necesarios para formar los números que forman el siguiente horario.

Realice

Una clase PHP para cada tipo reloj que permita calcular mediante un método getGastoEnergetico la cantidad de microwatts (?W) consumidos pasados "n" segundos desde el reloj en estado inicial (00:00:00).
Calcule cuanto es el ahorro de energía en watts (w) durante un dia completo, respecto de usar un reloj premium vs un reloj estandar. Asumiendo que el reloj se prende por primera vez a las 00:00:00 del dia.
Casos de prueba
$relojEstandar = new RelojEstandar();
echo $relojEstandar->getGastoEnergetico(0); // Response: 36
echo $relojEstandar->getGastoEnergetico(4); // Response: 172

$relojPremium = new RelojPremium();
echo $relojPremium->getGastoEnergetico(0); // Response: 36
echo $relojPremium->getGastoEnergetico(4); // Response: 42
```
