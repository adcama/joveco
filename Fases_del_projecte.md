
## 🛠️ **Fases del projecte**

### Fase 1: Infraestructura

1. **Dimensionament i instal·lació de plaques solars i bateries**
   - S'ha de garantir l'autosuficiència energètica per als equips del camp.

2. **Desplegament de xarxa de dades**
   - Es definirà si es farà mitjançant **LoRa** o **Wi-Fi**, per connectar tots els sensors amb el servidor local.

3. **Configuració del servidor**
   - Montatge i configuració del servidor, integrant-lo amb **Odoo** per a la visualització i gestió de les dades.

4. **Creació de connexió segura**
   - Establir una connexió segura **camp-botiga** mitjançant un túnel VPN o una altra solució segura.

---

### Fase 2: Sensorització i Automització

1. **Selecció i calibratge de sensors**
   - Sensors d’humitat de sòl, temperatura i maduració per a una mesura precisa de les condicions agrícoles.

2. **Instal·lació de sistemes de reg automàtic**
   - Instal·lació de vàlvules elèctriques i programació dels sistemes de reg amb microcontroladors (**Raspberry Pi** o **Arduino**).

3. **Implementació d'un sistema d'alertes automàtiques**
   - Notificacions via SMS o correu electrònic davant anomalies com sobrecàrregues, escassetat d’aigua, o altres situacions crítiques.

---

### Fase 3: Integració amb Odoo

1. **Desenvolupament d'un mòdul Odoo**
   - Crear un mòdul personalitzat a **Odoo** per visualitzar les dades de **IoT** en temps real.

2. **Automatització del registre de collites**
   - Quan es realitza la collita, les dades (quantitats i tipus de fruita) es registren automàticament a Odoo.

3. **Integració amb la previsió d’estoc de la botiga**
   - Les dades sobre la producció s’utilitzaran per ajustar la previsió d’estoc de la botiga, reduint les minves i millorant l'eficiència.

---

### Fase 4: Tancament i Millora Contínua

1. **Formació i documentació**
   - Preparació d’una **guia ràpida** i sessions de formació per a **Joan** i el seu equip per garantir un ús òptim de les noves eines.

2. **Ajust de paràmetres i optimització**
   - Ajustament de **umbrals de reg** i **configuració de sensors** segons les necessitats de cada estació i tipus de cultiu.

---

## 📈 **Indicadors d’èxit esperats**

- **Reducció del consum d’aigua**: Fins a un **30% menys** gràcies a la gestió automatitzada del reg.
- **Menys minves per collites mal planificades**: El control de maduració i la previsió de producció permeten planificar millor la collita.
- **Dades històriques per a la planificació futura**: El sistema generarà dades valuoses que milloraran la previsió de cultius futurs.
- **Gestió integrada del camp i la botiga**: La connexió directa entre el camp i la botiga garanteix una gestió més eficient de les operacions.

---
