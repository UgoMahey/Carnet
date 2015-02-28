import java.util.*;

public class Carnet  {
private	TreeSet<Contact> carnet;

public Carnet(){
	carnet = new TreeSet<Contact>();
}


/**Fonction qui retourne une liste de contact en fonction du nom 
et du pr�nom pass� en param�tre, s'il n'est pas pr�sent dans le carnet alors 
on retourne une liste de contact vide avec un message d'�rreur*/
public TreeSet<Contact> trouverC(String nom,String prenom){
	TreeSet<Contact> cont=new TreeSet<Contact>();
	for (Contact c : carnet){
		if (c.getNom().equalsIgnoreCase(nom)){
			cont.add(c);
		}
	}
	if(cont.isEmpty()){
		System.out.println("Contact non pr�sent dans le carnet");
	}
	return cont;
}


public void ajouterC (Contact c){
	carnet.add(c);
}
public void suppC(Contact c){
	carnet.remove(c);
}

/**Fonction d'affichage g�n�rale qui parcours tous les �l�ments d'un treeset et affiche les contacts pr�sent dedans*/
public void affContact(TreeSet<Contact> carnet){
	for(Contact c : carnet){
		System.out.println("nom :"+c.getNom()+"   pr�nom: "+c.getPre()+"  t�l�phone: "+c.getTel()+"  code postal: "+c.getCodep()+"  ville: "+c.getVille()+"  pays: "+c.getPays());
	}
}

/**On affiche tous les contact du carnet*/
public void affTousContact(){
	affContact(this.carnet);
}

/**On affiche les diff�rents contact que l'on choisit (un contact correspond � un nom et un pr�nom)*/
public void affUnContact(String nom,String prenom){
	//On trouve le contact en fonction de son nom et pr�nom et on l'affiche
	affContact(trouverC(nom,prenom));
}

public void editerTel(Contact c,String te){
	c.setTel(te);
}

public void editerCodep(Contact c,int code){
	c.setCodep(code);
}
public void editerVille(Contact c, String v){
	c.setVille(v);
}

public void editerPays(Contact c, String p){
	c.setPays(p);
}

}
