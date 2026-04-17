# 1. Cas d'ús: Compra Online i Sincronització Automàtica (WooCommerce-Dolibarr)

[cite_start]Aquest cas d'ús descriu el procés des que un client finalitza una comanda a la web fins que aquesta es converteix en un document comptable a l'ERP[cite: 175].

### Actors
* [cite_start]**Principal:** Client[cite: 177].
* [cite_start]**Secundaris:** Administrador del Sistema, Passarel·la de pagament (Stripe/PayPal)[cite: 178].

### Precondicions
* [cite_start]El client té accés a internet i el navegador configurat[cite: 181].
* [cite_start]L'usuari està registrat correctament a la base de dades del lloc web[cite: 182].
* [cite_start]Hi ha estoc real disponible del producte seleccionat (fruita/verdura)[cite: 183].
* [cite_start]Connexió activa via API REST entre el servidor de Dinahosting (WooCommerce) i la instància de Dolibarr[cite: 184, 191].

### Flux principal
* [cite_start]**Pas 1:** El client accedeix a l'e-commerce de JOVECO, inicia sessió i navega pel catàleg de productes Km 0[cite: 187].
* [cite_start]**Pas 2:** Selecciona els productes frescos i els afegeix al carret de la compra[cite: 188].
* [cite_start]**Pas 3:** El client aplica cupons de descompte i confirma l'adreça de lliurament[cite: 189].
* [cite_start]**Pas 4:** El client realitza el pagament a través de la passarel·la segura SSL[cite: 190].
* [cite_start]**Pas 5:** WooCommerce valida el pagament i envia una petició POST via API a Dolibarr.
* [cite_start]**Pas 6:** Dolibarr registra la comanda, genera l'ordre de venda (SO) i envia un correu de confirmació al client[cite: 192].

### Fluxos alternatius
* [cite_start]**A1 (Pas 4): Pagament denegat.** El sistema informa el client de l'error i l'invita a revisar les dades o canviar de mètode[cite: 194].
* [cite_start]**A2 (Pas 3): Producte esgotat.** Si l'estoc s'esgota durant el procés, el sistema bloqueja la finalització i avisa l'usuari[cite: 195].

### Postcondicions
* [cite_start]L'ordre de venda (SO) queda registrada oficialment a la base de dades de Dolibarr[cite: 198].
* [cite_start]Es genera una alerta automàtica per al Mosso de Magatzem per iniciar el picking[cite: 199].

---

## Especificacions No Funcionals del Sistema

* [cite_start]**Seguretat:** Accés mitjançant autenticació encriptada i sistema de permisos basat en rols (RBAC)[cite: 202, 204]. [cite_start]Comunicació via protocol HTTPS (SSL/TLS)[cite: 206].
* [cite_start]**Rendiment:** Arquitectura d'alta disponibilitat i baixa latència a Dinahosting[cite: 209]. [cite_start]Sincronització d'estoc mitjançant processos lleugers[cite: 210].
* [cite_start]**Disponibilitat:** Garantia operativa del 99,9% i protecció física mitjançant SAI[cite: 212, 214].

---

## Matriu d'Infraestructura Tècnica (Model JOVECO)

| Capa | Recursos | Configuració / Implementació |
| :--- | :--- | :--- |
| **Aplicació** | Dolibarr ERP, WooCommerce, TPV Web | [cite_start]Gestió de moviments, escaneig de codis i comandes en línia via navegador. |
| **Serveis** | MySQL, API REST WooCommerce | [cite_start]Processament de moviments d'estoc i guardat de dades en temps real. |
| **Sistema Op.** | Linux Server (Cloud Dinahosting) | [cite_start]Gestió de recursos, Apache/Nginx i serveis de l'ERP[cite: 218]. |
| **Xarxa / Física** | Wi-Fi 6, Firewall, Servidor, SAI | [cite_start]Connexió segura de dispositius i hardware necessari per a l'operació[cite: 218]. |
