function getBiodata(Nama, Umur) {
  return {
  	name: Nama,
  	age: Umur,
	address: 'Jl. Melati 1 No 223 PERUMNAS Condongcatur, Depok, Sleman Yogyakarta',
	hobbies: 'Gaming',
  	is_married: false,
  	list_school : [{
  		name : "SD Negeri 4 Ambon",
  		year_in : 2002,
  		year_out : 2008,
  		major : ""
  	},{
		name : "SMP Negeri 6 Ambon",
		year_in : 2008,
		year_out : 2011,
		major : ""
	},{
		name : "SMA Kristen YPKPM Ambon",
		year_in : 2011,
		year_out : 2014,
		major : ""
	},{
		name : "Universitas Amikom Yogyakarta",
		year_in : 2014,
		year_out : 2020,
		major : ""
	},],
  	skills : [{
  		skill_name : 'Web Programming',
  		level : 'Beginner'
  		},{

  		skill_name : 'UI / UX Design',
  		level : 'Beginner'
  	}],

  	interest_in_coding : true

  }  
}

console.log(getBiodata('Fradenly Keminhard Wattimury',22));

let Biodata = getBiodata('Fradenly Keminhard Wattimury',22);
let list_school = Biodata.list_school;
let skills = Biodata.skills;


console.log(JSON.stringify(Biodata));
