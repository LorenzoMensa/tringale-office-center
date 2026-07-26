[README-tringale.md](https://github.com/user-attachments/files/30391056/README-tringale.md)
# Tringale Office Center

Sito vetrina multi-pagina realizzato per un'attività commerciale di Catania (telefonia, contratti Vodafone, stampanti e accessori per ufficio), sviluppato come progetto di corso e come pezzo di portfolio.

## Stack tecnico

- **HTML5 / CSS3** — struttura semantica, layout responsive
- **Bootstrap 5** — componenti UI, grid system, icone (Bootstrap Icons)
- **PHP** — gestione dinamica del form di contatto (validazione lato server, sessioni per i messaggi di conferma/errore)
- **Google Fonts** (Lato)

## Funzionalità principali

- 5 pagine tematiche (Home, Telefonia, Contratti, Stampanti, Accessori) con navbar e footer condivisi
- Form di contatto funzionante: invio dati via `POST` a `invia.php`, validazione dei campi obbligatori, salvataggio delle richieste e messaggi di feedback all'utente tramite sessione PHP
- Palette e componenti personalizzati sopra Bootstrap (variabili CSS custom per colori brand)
- Design completamente responsive (mobile-first)

## Struttura del progetto

```
tringale-office-center/
├── index.html
├── telefonia.html
├── contratti.html
├── stampanti.html
├── accessori.html
├── contatti.php       # form dinamico
├── invia.php          # gestione submit form
├── css/
│   └── style.css
└── img/
    └── logom.png
```

## Cosa ho imparato / applicato

- Integrazione di un form HTML con back-end PHP (gestione sessioni, validazione, feedback utente)
- Organizzazione di un sito multi-pagina con componenti riutilizzabili (navbar, footer)
- Personalizzazione di un framework CSS (Bootstrap) mantenendo un'identità visiva distintiva

---

Progetto realizzato da [Lorenzo Mensa](https://lemmalab.netlify.app/), Catania.
