 function addExperience() 
    {
        const container = document.getElementById('experienciasContainer');
        const input = document.createElement('input');
        input.type = 'text';
        input.name = 'experiencia[]';
        container.appendChild(document.createElement('br'));
        container.appendChild(input);
    }