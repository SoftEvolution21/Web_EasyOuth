// Héctor H. Herrera Escobar
// Script de Test de Seguridad

describe('Test de seguridad en Home - Login', () => {
    
	it('conectando con localhost y el proyecto', () => {
        cy.visit('http://localhost/P_Online/login/index.php') // carga el proyecto en localhost
    })
	
	// Se intenta hacer login con datos inexistentes en la BD
	it('Request - login usuario X', () => {
		
		//se envía el valor de usuariox como nombre de usuario
		cy.get('#inp1').type('usuariox') 
		//se envía el valor de password123 como Password de usuario
		// la propiedad {enter} equivale a un enter para envío de datos
		cy.get('#inp3').type('password123{enter}')
		
		})

		// Se intenta hacer login una inyección de SQL básico
	it('Request - login inyección SQL Básico', () => {
		
		cy.get('#inp1').type('administrador')
		
		cy.get('#inp3').type('" or ""={enter}')
		
		})
	
	// Se intenta hacer login con datos existentes en la BD
	it('Request - login Usuario Existente', () => {
		
		cy.get('#inp1').type('123456789')

		cy.get('#inp3').type('12345678{enter}')
		
		})
	
})