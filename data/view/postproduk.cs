using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Landingpage
{
    #region Postproduk
    public class Postproduk
    {
        #region Member Variables
        protected int _id;
        protected unknown _title;
        protected string _slug;
        protected string _foto;
        protected string _deskripsi;
        protected string _oleh;
        #endregion
        #region Constructors
        public Postproduk() { }
        public Postproduk(unknown title, string slug, string foto, string deskripsi, string oleh)
        {
            this._title=title;
            this._slug=slug;
            this._foto=foto;
            this._deskripsi=deskripsi;
            this._oleh=oleh;
        }
        #endregion
        #region Public Properties
        public virtual int Id
        {
            get {return _id;}
            set {_id=value;}
        }
        public virtual unknown Title
        {
            get {return _title;}
            set {_title=value;}
        }
        public virtual string Slug
        {
            get {return _slug;}
            set {_slug=value;}
        }
        public virtual string Foto
        {
            get {return _foto;}
            set {_foto=value;}
        }
        public virtual string Deskripsi
        {
            get {return _deskripsi;}
            set {_deskripsi=value;}
        }
        public virtual string Oleh
        {
            get {return _oleh;}
            set {_oleh=value;}
        }
        #endregion
    }
    #endregion
}