


public class Contact implements Comparable<Contact> {

	private String nom;
	private String prenom;
	private String tel;
	private int codepost;
	private String ville;
	private String pays;
	public Contact (){}
	public Contact (String n,String p,String t,int codep,String v,String pa){
		nom=n;
		prenom=p;
		tel=t;
		codepost=codep;
		ville=v;
		pays=pa;
	}
	
	public String getNom(){return nom;}
	public String getPre(){return prenom;}
	public String getTel(){return tel;}
	public int getCodep(){return codepost;}
	public String getVille(){return ville;}
	public String getPays(){return pays;}
	
	public void setNom(String n){nom=n;}
	public void setPre(String pn){prenom=pn;}
	public void setTel(String t){tel=t;}
	public void setCodep(int c){codepost=c;}
	public void setVille(String v){ville=v;}
	public void setPays(String p){pays=p;}
	
	/**Implemente compareTo, on choisit de trier les contacts par nom uniquement*/
	public int compareTo(Contact c) {
		return this.nom.compareTo(c.getNom());
	}

	
}
