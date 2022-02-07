# Projecte en producció

https://casteaching.alumnedam.me

# Notes markdown

Més info a: https://github.com/acacha/wiki/blob/main/casteaching.md

# Screencasts/Video tutorials a Youtube

https://tubeme.acacha.org/tdd

# Autor

- Sergi Tur Badenas: https://acacha.github.io
- Instagram: https://instagram.com/acacha_dev
- Github: https://github.com/acacha

![image](https://user-images.githubusercontent.com/4015406/140644527-e186bf90-e556-4970-98ed-3f00c5f1af11.png)

# Codi font dels alumnes

- Tur Badenas, Sergi: Alumne DAM Prova: https://github.com/AlumneDAMPRova/casteaching

# Projectes en explotació dels alumnes

- Tur Badenas, Sergi: Alumne DAM Prova: https://casteaching.alumnedam.me/

# Versió de l'aplicació per a mòbils

- Ionic casteaching: https://github.com/acacha/casteachingIonic

# 109 Feature UI -> Vista mostrar video

STARTING FROM SCRATCH
- Start with a feature not a layout -> Focusing on the value -> Evitar procastrinació
    - No cal pensar el layout de tota l'aplicació, el shell sinó la nostra feature

FEATURE

**Jerarquia**

Dades principals
- Title del vídeo
- Description -> Pensar podrà ser markdown
- URL -> URL del vídeo per incrustar el vídeo -> de moment YOUTUBE
  Dades secundàries
- Data de publicació,
- Data de creació, data última modificació -> només per backend?, li cal a l'usuari final?
- Navegació -> next, previous
- Series -> TODO

- Details come later
- Hold the color -> grayscale -> Force to use spacing,contrast and size
- Don't design to much
- Work in cycles
- Be a pessimist -> si no tenim clar si una funcionalitat la implementarem la trèiem
- Choose a personality -> Tailwind CSS: https://tailwindcss.com/
    - Simple -> ESCOLLO ESTA
    - Playful
    - Elegant
    - Brutalist
- Escollir una font -> utilitzem -> Tailwind UI  Tipus de font a mida amb l'estil
- Colors primaris -> Blue is safe an familiar -> Pink més playful -> Golds poden ser més elegants
- Borders/cantonades -> Molt marcades indiquen més playfull, cap indica seriositat, simple -> poc border radius
- LIMIT YOU CHOICES -> Això ja ho fa Tailwind CSS
    - Mides de text
    - Mides borders, paddings, spacings, etc

### Jerarquia

De totes les dades d'un vídeo quina és la més IMPORTANT?
- LA URL -> El vídeo en si -> el posem davant de tot
- Títol -> segon en importància
- Descripció: tercer

La mida no ho és tot
- Primary and Secondary content
    - Tipografia: font-weight
    - Softer colors -> escala de grisos
    - Limitar el nombre colors i el nombre de font weights
