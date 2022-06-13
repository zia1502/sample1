CREATE TABLE `Admin'(
`	ID'
`	Title'	
 `   FirstName`
`	LastName`
`	MiddleName`
`	Dob`
`	Email`
`	Password`
`	Phone1`
`	Phone2`
`	Address1`
`	Address2`
`	City`
`	GPS [Long, Lat]`
`	DeviceDetails`
`	IPAdd`
`	Mac.Add`
`	Created_by`
`	Created_at`
`	Updated_by`
`	Updated_at`
`	Deleted_by`
`	Deleted_at`
	
`Patients`
`	ID`
`	Title `[Mr., Mrs., Miss., Dr., Mstr,. Prof. ]
 `   FirstName` 
`	LastName`
`	MiddleName`
`	Dob`
`	Blood_Group` [A+, A-, B+, B-, AB+, AB-, O+, O-]
`	Email`
 `   Password`	
`	Phone1`
`	Address_1`
`	Address_2`
`	City`
`	Pat_ID` [LN3].[FN3].[NUM3] huszia001 system generated for Filing Purpose
`	GPS`
`	DeviceDetails`
`	IPAdd`
`	Mac.Add`	
`	Created_by`
`	Created_at`
`	Updated_by`
`	Updated_at`
`	Deleted_by`
`	Deleted_at`
 `   Doctors`
`	ID`
`	Title`
`	FirstName`
`	LastName`
`	MiddleName`
`	Designation`
`BMDC_ID`
`Specialty_ID`
`Phone1`
`Email`
`Password`
`PracAddress1`
`PracAddress2`
`City`
`GPS_Code`
`	Created_by`
`	Created_at`
`	Updated_by`
`	Updated_at`
`	Deleted_by`
`	Deleted_at`
`Specialties.ID`
	`Specialty`
	`Description`
	`Created_by`
	`Created_at`
	`Updated_by`
	`Updated_at`
	`Deleted_by`
	`Deleted_at`
`Allergies`
`	ID`
`	Allergies`
`	ShortCode`
`	Description`
`	Created_by`
`	Created_at`
`	Updated_by`
`	Updated_at`
`	Deleted_by`
`	Deleted_at`

`Diagnosis`
`	ID`
`	Diagnosis`
`	ShortCode`
`	Description`
`	Created_by`
`	Created_at`
`	Updated_by`
`	Updated_at`
`	Deleted_by`
`	Deleted_at`

`Investigations`
`	ID`
`	Investigations`
`	ShortCode`
`	Description`
`	Created_by`
`	Created_at`
`	Updated_by`
`	Updated_at`
`	Deleted_by`
`	Deleted_at`

`Pat.Investigations`
`	ID`
`	Patient.ID`
`	Investigation.ID`
`	Created_by`
`	Created_at`
`	Updated_by`
`	Updated_at`
`	Deleted_by`
`	Deleted_at`

`Med.Histories`
`	ID`
`	Diseases`
`	Code`
`	Description`
`	Created_by`
`	Created_at`
`	Updated_by`
`	Updated_at`
`	Deleted_by`
`	Deleted_at`

`Pat.Med.Histroy`
`	ID`
`	Med.History_ID`
    `Patient.ID`
`	Notes`
`	Created_by`
`	Created_at`
`	Updated_by`
`	Updated_at`
`	Deleted_by`
`	Deleted_at`
`Heriditary_Med_Historys`
`	ID`
`	Diseases`
`	Short_Code`
`	Description`
`	Created_by`
`	Created_at`
`	Updated_by`
`	Updated_at`
`	Deleted_by`
`	Deleted_at`
`Pat.Heriditary.Med.Histroy`
`	ID`
`	Heriditary_Med_History_ID`
`Patient.ID`
`	Notes`
`	Created_by`
`	Created_at`
`	Updated_by`
`	Updated_at`
`	Deleted_by`
`	Deleted_at`
`Consultations`
`	ID`
`	Patient.ID`
`	ChiefComplaints`
`	Weight`
`	Height`
`	BodyTemperature`
`	BloodPressure`
`	Pulse`
`	Pat.Investigation.ID`
`	Allerfies.ID`
`	Diagnosis.ID`
`	Investigation.ID`
`	PatientHistory`
`	HeriditaryHistory`
`	Note.ID`
`GPS`
`	DeviceDetails`
`	IPAdd`
`	Mac.Add`	
`	Created_by`
`	Created_at`
`	Updated_by`
`	Updated_at`
`	Deleted_by`
`	Deleted_at`			
`Consultation.Notes`
`	ID`
`	Consultation_ID`
`	Created_by`
`	Created_at`
`	Updated_by`
`	Updated_at`
`	Deleted_by`
`	Deleted_at`
`Medications`
`	ID`
`	DrugName`
`	Manufacturer`
`	GenericName`
`	Packages`
`	Created_by`
`	Created_at`
`	Updated_by`
`	Updated_at`
`	Deleted_by`
`	Deleted_at`
`Pat.Medications`
`	ID`
`	Pat.ID`
`	Medication.ID`
`	Dose.ID`
`	Created_by`
`	Created_at`
`	Updated_by`
`	Updated_at`
`	Deleted_by`
`	Deleted_at`
`Instructions`
`	ID`
`	Instruction_desc`
`	ShortCode`
`	Created_by`
`	Created_at`
`	Updated_by`
`	Updated_at`
`	Deleted_by`
`	Deleted_at`
`Doses`
`	ID`
`	DoseName`
`	ShortCode`
`	Description`
`	Created_by`
`	Created_at`
`	Updated_by`
`	Updated_at`
`	Deleted_by`
`	Deleted_at`

`Prescriptions`
`	ID`
`	Consultation.ID`
`	Doctor.ID`
`	Medication.ID`
`	Dose.ID`
`	Instruction.ID`
`	FollowUp.ID`
`	Referral.ID`
`	GPS`
`	DeviceDetails`
`	IPAdd`
`	Mac.Add`	
`	Created_by`
`	Created_at`
`	Updated_by`
`	Updated_at`
`	Deleted_by`
`	Deleted_at`
`Invoice`
`	ID`
`	Patient.ID`
`	Doctor.ID`
`	Admin.ID`
`	Prescription.ID`
`	Amount_Due`
`	Amount_Paid`
`Payment`
`	ID`
`	Patient.ID`
`	Doctor.ID`
`	Admin.ID`
`	Prescription.ID`
`	Doctor.Amount`
`	Admin.Amount`
`	PaymentMethod`
`Receipt`
`	ID`
`	Paitent.ID`
`	Receipt.Amount`
`	Prescription.ID`
`Journal`
`	ID`
`	Patient.ID`
`	Prescription.ID`
`	Invoice.ID`
`	Payment.ID`
`	Receipt.ID`
	
`Transaction`
`	ID`
`	Invoice.ID`
`	Payment.ID`
`	Receipt.ID`
`	Journal.ID`
`	Payment.Amount`
`TransactionType`
`	Prescription.ID`
`Service_subscriptions`
`	ID`
`	ServiceName`
`	ServiceDesc`
`	Start_Date`
`	End_Date`
`	Price`
`	Ser.Discount`
`Pat_Service_Subscription`
`	ID`
`	Patient.ID`
`	Service_Subscripton.ID`
`	Price`
`	Pat.Discount`
`	Effective_date`
`	Duration`
	
		
	
	
