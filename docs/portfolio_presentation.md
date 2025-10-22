---
marp: true
theme: custom
paginate: true
header: "Portfolio Developer - Mehdi Bentaleb"
footer: "Mini-site “Developer Portfolio”"
---

<!-- _class: lead -->
<style>
/* Custom Marp Theme */
section {
  font-family: 'Arial', sans-serif;
  background: linear-gradient(135deg, #eeeeeeff 0%, #c3cfe2 100%);
  padding: 40px;
  color: #333;
}
h1 {
  color: #060606ff;
  font-weight: bold;
  margin-bottom: 20px;
}
h2, h3 {
  color: #000000ff;
  font-weight: bold;
  margin-bottom: 20px;
}

ul {
  list-style-type: disc;
  margin-left: 30px;
  font-size: 0.8em;
  line-height: 1.6;
}

img {
  max-width: 60%;
  margin: 20px auto;
  display: block;
  border-radius: 10px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

section.lead {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  text-align: center;
  background-color: white;
  color: white;
}

section.lead h1 {
  font-size: 3em;
  margin-bottom: 10px;
}

section.lead p {
  font-size: 1.3em;
  color: black;
}

footer, header {
  font-size: 0.3em;
  color: #555;
  padding: 10px 40px;
}

.paginate {
  color: #2c3e50;
  font-weight: bold;
}

/* Specific styling for Use Case Diagram slide */
section.use-case {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}

section.use-case img {
  max-width: 100%;
  max-height: 80vh; /* Full height relative to viewport height */
  width: auto;
  height: auto;
  margin: 0 auto;
  border-radius: 10px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

/* Smooth transitions */
section {
  transition: all 0.3s ease;
}
</style>

# Portfolio Developer

**By Mehdi Bentaleb**

---

## Requirements Specification

- **Client**: Mohamed Ouallou
- **Project**: Mini-site “Developer Portfolio”
- **Objective**: Showcase Profile, Projects, and Contact Information
- **Pages**:
  - Home
  - About
  - Projects
  - Contact
- **Users**:
  - Students
  - Clients
  - HR
- **Technologies**: Laravel + Services
- **Design**: Responsive & Clean

---

## Capture Portfolio

![Portfolio Capture](imges/Capture.png)

---

<!-- _class: use-case -->

## Use Case Diagram

![Use Case Diagram](imges/UML.png)

---

## Plan

![Plan](imges/mermaid-diagram.png)

---
=======
---
marp: true
theme: default
paginate: true
title: Developer Portfolio Mini-Site Analysis
style: |
  section {
    background-color: #f5faff;
    color: #003087;
  }
  h1, h2 {
    color: #003087;
  }
  img {
    max-height: 500px;
     width: auto; 
     object-fit: contain;
  }
---

# Developer Portfolio Mini-Site
**Mallouli Abdelhay**  
*Supervised by: M. Essarraj Fouad*  
*Group: DM101*

---

## Analysis: Requirements Specification
- **Context**: Portfolio – Laravel 
- **Objective**: Profile –  Projects – Contact
- **For**: Aboumacha Mohamed Amine
- **Users**: Recruiters – Clients – Students
- **Pages**: Home – Projects – Details – About
- **Design**: Clean – Responsive – blue and white for colors

---

## Analysis: Example of an Inspiring Site

![Inspiring Site](imges/imgex.png)

---

## Analysis: Use Case Diagram
![Use Case Diagram](imges/Uml.png)

---

## Conception: Schema

![Schema](imges/mermaid-diagram.png)

---

## Conception: Maquette

![Maquette](imges/Capture.png)
