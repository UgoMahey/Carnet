import java.util.*;

public class Carnet  {
private	TreeSet<Contact> carnet;

public Carnet(){
	carnet = new TreeSet<Contact>();
}


/**Fonction qui retourne une liste de contact en fonction du nom 
et du prénom passé en paramètre, s'il n'est pas présent dans le carnet alors 
on retourne une liste de contact vide avec un message d'érreur*/
public TreeSet<Contact> trouverC(String nom,String prenom){
	TreeSet<Contact> cont=new TreeSet<Contact>();
	for (Contact c : carnet){
		if (c.getNom().equalsIgnoreCase(nom)){
			cont.add(c);
		}
	}
	if(cont.isEmpty()){
		System.out.println("Contact non présent dans le carnet");
	}
	return cont;
}


public void ajouterC (Contact c){
	carnet.add(c);
}
public void suppC(Contact c){
	carnet.remove(c);
}

/**Fonction d'affichage générale qui parcours tous les éléments d'un treeset et affiche les contacts présent dedans*/
public void affContact(TreeSet<Contact> carnet){
	for(Contact c : carnet){
		System.out.println("nom :"+c.getNom()+"   prénom: "+c.getPre()+"  téléphone: "+c.getTel()+"  code postal: "+c.getCodep()+"  ville: "+c.getVille()+"  pays: "+c.getPays());
	}
}

/**On affiche tous les contact du carnet*/
public void affTousContact(){
	affContact(this.carnet);
}

/**On affiche les différents contact que l'on choisit (un contact correspond à un nom et un prénom)*/
public void affUnContact(String nom,String prenom){
	//On trouve le contact en fonction de son nom et prénom et on l'affiche
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
