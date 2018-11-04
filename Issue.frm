VERSION 5.00
Object = "{CDE57A40-8B86-11D0-B3C6-00A0C90AEA82}#1.0#0"; "MSDATGRD.OCX"
Object = "{67397AA1-7FB1-11D0-B148-00A0C922E820}#6.0#0"; "MSADODC.OCX"
Object = "{86CF1D34-0C5F-11D2-A9FC-0000F8754DA1}#2.0#0"; "Mscomct2.ocx"
Begin VB.Form Issue 
   Caption         =   "Issue Book"
   ClientHeight    =   6045
   ClientLeft      =   60
   ClientTop       =   450
   ClientWidth     =   8580
   Icon            =   "Issue.frx":0000
   LinkTopic       =   "Form1"
   ScaleHeight     =   6045
   ScaleWidth      =   8580
   StartUpPosition =   3  'Windows Default
   Begin VB.TextBox txtpass 
      Height          =   375
      Left            =   1800
      TabIndex        =   16
      Top             =   3720
      Width           =   2895
   End
   Begin MSComCtl2.DTPicker dtp_DateReturned 
      Height          =   375
      Left            =   1800
      TabIndex        =   15
      Top             =   4920
      Width           =   2895
      _ExtentX        =   5106
      _ExtentY        =   661
      _Version        =   393216
      Format          =   17563649
      CurrentDate     =   40486
   End
   Begin MSComCtl2.DTPicker dtp_DateIssued 
      Height          =   375
      Left            =   1800
      TabIndex        =   14
      Top             =   4320
      Width           =   2895
      _ExtentX        =   5106
      _ExtentY        =   661
      _Version        =   393216
      Format          =   17563649
      CurrentDate     =   40486
   End
   Begin MSAdodcLib.Adodc Adodc2 
      Height          =   375
      Left            =   360
      Top             =   2760
      Visible         =   0   'False
      Width           =   1215
      _ExtentX        =   2143
      _ExtentY        =   661
      ConnectMode     =   0
      CursorLocation  =   3
      IsolationLevel  =   -1
      ConnectionTimeout=   15
      CommandTimeout  =   30
      CursorType      =   3
      LockType        =   3
      CommandType     =   2
      CursorOptions   =   0
      CacheSize       =   50
      MaxRecords      =   0
      BOFAction       =   0
      EOFAction       =   0
      ConnectStringType=   1
      Appearance      =   1
      BackColor       =   -2147483643
      ForeColor       =   -2147483640
      Orientation     =   0
      Enabled         =   -1
      Connect         =   "Provider=Microsoft.Jet.OLEDB.4.0;Data Source=D:\VB Pro\elibrary.mdb;Persist Security Info=False"
      OLEDBString     =   "Provider=Microsoft.Jet.OLEDB.4.0;Data Source=D:\VB Pro\elibrary.mdb;Persist Security Info=False"
      OLEDBFile       =   ""
      DataSourceName  =   ""
      OtherAttributes =   ""
      UserName        =   ""
      Password        =   ""
      RecordSource    =   "Username"
      Caption         =   "Adodc2"
      BeginProperty Font {0BE35203-8F91-11CE-9DE3-00AA004BB851} 
         Name            =   "MS Sans Serif"
         Size            =   8.25
         Charset         =   0
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      _Version        =   393216
   End
   Begin MSDataGridLib.DataGrid DataGrid2 
      Bindings        =   "Issue.frx":628A
      Height          =   1935
      Left            =   5760
      TabIndex        =   12
      Top             =   3360
      Width           =   1695
      _ExtentX        =   2990
      _ExtentY        =   3413
      _Version        =   393216
      HeadLines       =   1
      RowHeight       =   15
      BeginProperty HeadFont {0BE35203-8F91-11CE-9DE3-00AA004BB851} 
         Name            =   "MS Sans Serif"
         Size            =   8.25
         Charset         =   0
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      BeginProperty Font {0BE35203-8F91-11CE-9DE3-00AA004BB851} 
         Name            =   "MS Sans Serif"
         Size            =   8.25
         Charset         =   0
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      ColumnCount     =   2
      BeginProperty Column00 
         DataField       =   ""
         Caption         =   ""
         BeginProperty DataFormat {6D835690-900B-11D0-9484-00A0C91110ED} 
            Type            =   0
            Format          =   ""
            HaveTrueFalseNull=   0
            FirstDayOfWeek  =   0
            FirstWeekOfYear =   0
            LCID            =   1033
            SubFormatType   =   0
         EndProperty
      EndProperty
      BeginProperty Column01 
         DataField       =   ""
         Caption         =   ""
         BeginProperty DataFormat {6D835690-900B-11D0-9484-00A0C91110ED} 
            Type            =   0
            Format          =   ""
            HaveTrueFalseNull=   0
            FirstDayOfWeek  =   0
            FirstWeekOfYear =   0
            LCID            =   1033
            SubFormatType   =   0
         EndProperty
      EndProperty
      SplitCount      =   1
      BeginProperty Split0 
         BeginProperty Column00 
         EndProperty
         BeginProperty Column01 
         EndProperty
      EndProperty
   End
   Begin VB.CommandButton cmdClear 
      Caption         =   "&Clear"
      Height          =   495
      Left            =   5640
      TabIndex        =   11
      Top             =   5520
      Width           =   1335
   End
   Begin VB.CommandButton cmdDelete 
      Caption         =   "&Delete"
      Height          =   495
      Left            =   1440
      TabIndex        =   10
      Top             =   5520
      Width           =   1215
   End
   Begin VB.TextBox txtUsername 
      Height          =   375
      Left            =   1800
      TabIndex        =   7
      Top             =   3120
      Width           =   2895
   End
   Begin VB.CommandButton cmdNext 
      Caption         =   "&Next"
      Height          =   495
      Left            =   4200
      TabIndex        =   4
      Top             =   5520
      Width           =   1335
   End
   Begin VB.CommandButton cmdPrev 
      Caption         =   "&Previous"
      Height          =   495
      Left            =   2760
      TabIndex        =   3
      Top             =   5520
      Width           =   1335
   End
   Begin VB.CommandButton cmdClose 
      Caption         =   "&Close"
      Height          =   495
      Left            =   7080
      TabIndex        =   2
      Top             =   5520
      Width           =   1335
   End
   Begin VB.CommandButton cmdSave 
      Caption         =   "&Save"
      Height          =   495
      Left            =   120
      TabIndex        =   1
      Top             =   5520
      Width           =   1215
   End
   Begin MSDataGridLib.DataGrid DataGrid1 
      Bindings        =   "Issue.frx":629F
      Height          =   2415
      Left            =   240
      TabIndex        =   0
      Top             =   240
      Width           =   7935
      _ExtentX        =   13996
      _ExtentY        =   4260
      _Version        =   393216
      HeadLines       =   1
      RowHeight       =   15
      BeginProperty HeadFont {0BE35203-8F91-11CE-9DE3-00AA004BB851} 
         Name            =   "MS Sans Serif"
         Size            =   8.25
         Charset         =   0
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      BeginProperty Font {0BE35203-8F91-11CE-9DE3-00AA004BB851} 
         Name            =   "MS Sans Serif"
         Size            =   8.25
         Charset         =   0
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      ColumnCount     =   2
      BeginProperty Column00 
         DataField       =   ""
         Caption         =   ""
         BeginProperty DataFormat {6D835690-900B-11D0-9484-00A0C91110ED} 
            Type            =   0
            Format          =   ""
            HaveTrueFalseNull=   0
            FirstDayOfWeek  =   0
            FirstWeekOfYear =   0
            LCID            =   1033
            SubFormatType   =   0
         EndProperty
      EndProperty
      BeginProperty Column01 
         DataField       =   ""
         Caption         =   ""
         BeginProperty DataFormat {6D835690-900B-11D0-9484-00A0C91110ED} 
            Type            =   0
            Format          =   ""
            HaveTrueFalseNull=   0
            FirstDayOfWeek  =   0
            FirstWeekOfYear =   0
            LCID            =   1033
            SubFormatType   =   0
         EndProperty
      EndProperty
      SplitCount      =   1
      BeginProperty Split0 
         BeginProperty Column00 
         EndProperty
         BeginProperty Column01 
         EndProperty
      EndProperty
   End
   Begin MSAdodcLib.Adodc Adodc1 
      Height          =   330
      Left            =   4560
      Top             =   0
      Visible         =   0   'False
      Width           =   3855
      _ExtentX        =   6800
      _ExtentY        =   582
      ConnectMode     =   0
      CursorLocation  =   3
      IsolationLevel  =   -1
      ConnectionTimeout=   15
      CommandTimeout  =   30
      CursorType      =   3
      LockType        =   3
      CommandType     =   2
      CursorOptions   =   0
      CacheSize       =   50
      MaxRecords      =   0
      BOFAction       =   0
      EOFAction       =   0
      ConnectStringType=   1
      Appearance      =   1
      BackColor       =   -2147483643
      ForeColor       =   -2147483640
      Orientation     =   0
      Enabled         =   -1
      Connect         =   "Provider=Microsoft.Jet.OLEDB.4.0;Data Source=D:\VB Pro\elibrary.mdb;Persist Security Info=False"
      OLEDBString     =   "Provider=Microsoft.Jet.OLEDB.4.0;Data Source=D:\VB Pro\elibrary.mdb;Persist Security Info=False"
      OLEDBFile       =   ""
      DataSourceName  =   ""
      OtherAttributes =   ""
      UserName        =   ""
      Password        =   ""
      RecordSource    =   "Issue"
      Caption         =   ""
      BeginProperty Font {0BE35203-8F91-11CE-9DE3-00AA004BB851} 
         Name            =   "MS Sans Serif"
         Size            =   8.25
         Charset         =   0
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      _Version        =   393216
   End
   Begin VB.Label Label5 
      Alignment       =   2  'Center
      Caption         =   "Usernames"
      BeginProperty Font 
         Name            =   "Times New Roman"
         Size            =   9.75
         Charset         =   0
         Weight          =   700
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   255
      Left            =   5760
      TabIndex        =   13
      Top             =   3000
      Width           =   1575
   End
   Begin VB.Label Label4 
      Caption         =   "Date of Return"
      Height          =   375
      Left            =   360
      TabIndex        =   9
      Top             =   4920
      Width           =   1455
   End
   Begin VB.Label Label3 
      Caption         =   "Date of Issue"
      Height          =   375
      Left            =   360
      TabIndex        =   8
      Top             =   4320
      Width           =   1335
   End
   Begin VB.Label Label2 
      Caption         =   "Book Id"
      Height          =   375
      Left            =   360
      TabIndex        =   6
      Top             =   3720
      Width           =   1455
   End
   Begin VB.Label Label1 
      Caption         =   "Username"
      Height          =   375
      Left            =   360
      TabIndex        =   5
      Top             =   3120
      Width           =   1695
   End
End
Attribute VB_Name = "Issue"
Attribute VB_GlobalNameSpace = False
Attribute VB_Creatable = False
Attribute VB_PredeclaredId = True
Attribute VB_Exposed = False
Private Sub cmdClose_Click()
Unload Me
End Sub

Private Sub cmdDelete_Click()
Confirm = MsgBox("Are you sure you want to delete this record?", vbYesNo, "Deletion Confirmation")
If Confirm = vbYes Then
With Adodc1
    .Recordset.Delete
End With
MsgBox "Record Deleted!", , "Message"
Else
MsgBox "Record Not Deleted!", , "Message"
End If
End Sub

Private Sub cmdNext_Click()
If Not Adodc1.Recordset.EOF Then
Adodc1.Recordset.MoveNext
If Adodc1.Recordset.EOF Then
Adodc1.Recordset.MovePrevious
End If
End If
End Sub

Private Sub cmdPrev_Click()
If Not Adodc1.Recordset.BOF Then
Adodc1.Recordset.MovePrevious
If Adodc1.Recordset.BOF Then
Adodc1.Recordset.MoveNext
End If
End If

End Sub

Private Sub cmdSave_Click()
dtp_DateIssued.Value = Date
dtp_DateReturned.Value = Date
dtp_DateReturned.Day = dtp_DateReturned.Day + dayslimit
If MsgBox("Are you sure you want to issue a book?", vbYesNo, "Save?") = vbYes Then
With Adodc1
    .Refresh
    .Recordset.AddNew
    .Recordset.Fields("Username") = txtUsername.Text
    .Recordset.Fields("BookId") = txtpass.Text
    .Recordset.Fields("Date of Issue") = dtp_DateIssued.Value
    .Recordset.Fields("Date of Return") = dtp_DateReturned.Value
    .Recordset.Update
    .Refresh
End With
End If
End Sub

