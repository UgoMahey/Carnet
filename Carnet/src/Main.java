

public class Main {

	public static void main(String[] args) {
		//Création de différents contact 
		Contact c = new Contact("mahey","ugo","0240162438",44800,"Saint-Herblain","France");
		Contact c1 = new Contact("lahey","ugo","0240162438",44800,"Saint-Herblain","France");
		Contact c2 = new Contact("zahey","ugo","0240162438",44800,"Saint-Herblain","France");
		Contact c3 = new Contact("cahey","ugo","0240162438",44800,"Saint-Herblain","France");
		
		//Ajout des contacts dans le carnet d'adresses
		Carnet ca=new Carnet();
		ca.ajouterC(c);
		ca.ajouterC(c1);
		ca.ajouterC(c2);
		ca.ajouterC(c3);
		
		
		//On affiche le contact répondant au nom de mahey ugo
		ca.affUnContact("mahey","ugo");
		System.out.println("-------------------------------------------------------------------");
		
		//On pratique des modifications 
		ca.editerCodep(c2, 44400);
		ca.editerVille(c2,"Nantes");
		ca.editerTel(c3, "+32465656462");
		ca.editerPays(c3, "Belgique");
		
		//On affiche tous les contacts du carnet
		ca.affTousContact();
	}

}
