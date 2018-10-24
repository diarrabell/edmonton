# edmonton
Jayda as IA, Margaret as Designer and Diarra as coder.
http://csc174.org/assignment07/edmonton
## Ontology
All students who've taken csc170 and are taking 174. 
Jayda and Diarra are undergrad and computer science majors,
Margaret isn't. Under each student is an about me that talks about their past and interests and a college section that talks about their time here. 
## Taxonomy 
The scope of the site are the three web dev students. Under their name (h1) for the about page is an "About me" title (h3) and a "college" title (h3). We use sections to hold each students info, and div as we get more specific and assign classes to information. 
Chor: Students are ordered from furthest away class year to closest, so that the odd student out is mentioned last, making it easier to spot the difference between her and the other 2 students.
For index, the Z points are the header (left of page), the picture of the first student (right), the pic of the second (left), and the pic of the third (right).
For about, the F points are the student names (left), and the student pictures (right).



CSS architecture:

We used a custom version of a mix of ITCSS and SMACSS. ITCSS (Inverted Triangle CSS) is an architecture that organizes CSS files from generic to explicit, and from low to high specificity. It does not have one specific framework, but rather is a way of thinking. SMACSS (Scalable and Modular Architecture for CSS) is a style guide for CSS. Additionally, we added numbers so that the files would stay in order.

Our files are as follows:
-- Variables - defines any variables in CSS (if used).
-- Base - contains styles that are applied generally to the whole document, including fonts etc. (top of document) and styles applied to specific HTML elements like H1 and A tags (bottom of document).
-- Semantic-Reusable - contains any classes I create that have semantic meaning, and are reusable throughout the website (e.g. "media-object" or "search-form__button").
-- Appearance-Reusable - contains any classes that specify appearance, like .loud or .big., that I didn't want to add to the layout. Use sparingly.
-- Layout -- contains stuff that pertains to specific sections (including the navigation section). Should put "skins" up top (things that apply to multiple sections referencing the OOCSS model), and specific sections below.